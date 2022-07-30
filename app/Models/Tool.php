<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Spatie\Permission\Models\Role;
use App\Models\Category;

class Tool
{
    public static function getRoleName($id)
    {
        $role = DB::table('model_has_roles')->where('model_id', $id)->first();
        if ($role == null)
            return 'کاربر نقش ندارد';
        else {
            $exe = Role::findById($role->role_id);
            return $exe->name;
        }
    }

    public static function checkUserRole($userId, $roleId)
    {
        $role = DB::table('model_has_roles')
            ->where('model_id', $userId)
            ->where('role_id', $roleId)
            ->first();
        if ($role == null)
            return null;
        else
            return true;
    }

    public static function getParentLabel($categoryId)
    {
        $cat = Category::find($categoryId);
        return $cat->label;
    }

    public static function imagePath()
    {
        return 'public/images';
    }

    public static function getAllCategories()
    {
        $allCategories = Category::where('parent_id',null)->with(['subCategories'])->get();
        return $allCategories;
    }

    public static function getAllProducts()
    {
        $allProducts = Product::all();
        $allProducts->load('productImages');
        return $allProducts;
    }

    public static function calculateDiscount($price,$discountPrice,$discountPercent)
    {
        if ($discountPrice != null)
            return ($price-$discountPrice);
        elseif($discountPercent != null)
            return ($price-($price*($discountPercent/100)));
    }

    public static function getMenProducts()
    {
        $menProducts = Product::where('category_id', 3)->get();
        $menProducts->load('productImages');
        return $menProducts;
    }

    public static function getWomenProducts()
    {
        $womenProducts = Product::where('category_id', 4)->get();
        $womenProducts->load('productImages');
        return $womenProducts;
    }

    public static function getAtLeastProducts()
    {
        $atLeastProducts = Product::orderBy('id','desc')->take(4)->get();
        $atLeastProducts->load('productImages');
        return $atLeastProducts;
    }

    public static function getAllTag()
    {
        $allTag = Tag::all();
        return $allTag;
    }

    public static function persianNumber($numbers)
    {
        $search= array("0","1","2","3","4","5","6","7","8","9");
        $replace= array("۰","۱","۲","۳","۴","۵","۶","۷","۸","۹");
        $result= str_replace($search,$replace,$numbers);

        return $result;
    }
    public static function persianPriceNumber($numbers)
    {
        $numbers =  number_format($numbers);
        $search= array("0","1","2","3","4","5","6","7","8","9");
        $replace= array("۰","۱","۲","۳","۴","۵","۶","۷","۸","۹");
        $result= str_replace($search,$replace,$numbers);

        return $result;
    }
    public static function readyToUrl($string)
    {
        return str_replace(' ','-',$string);
    }
    public static function readyUrlToQuery($string)
    {
        return str_replace('-',' ',$string);
    }

    public static function addProduct($productID,$quantity)
    {
        if (Session::has('basket'))
        {
            $previousProduct = Session::get('basket');
            $product = Product::with('productImages')->find($productID);
            if (!$product)
                return null;
            $newProduct = $previousProduct;
            if (empty($newProduct[$productID])) //if previous product is empty, create new product
                $newProduct [$productID] = [$product,($quantity)];
            else //if previous product not empty, update the current product
            {
                if ($newProduct[$productID][1] == 1 and $quantity == -1)
                {
                    self::remove($productID);
                    return back();
                }
                $newProduct [$productID] = [$previousProduct[$productID][0],(($previousProduct[$productID][1])+$quantity)];
            }
            Session::put('basket',$newProduct);
        }
        else
        {
            $product = Product::with('productImages')->find($productID);
            if (!$product)
                return null;
            $newProduct = [];
            $newProduct [$productID] = [$product,$quantity];
            Session::put('basket',$newProduct);
        }
    }

    public static function remove($productID)
    {
        if (Session::has('basket'))
        {
            $currentProduct = Session::get('basket');
            if (!empty($currentProduct[$productID]))
                unset($currentProduct[$productID]);
            Session::put('basket',$currentProduct);
        }
    }

    public static function clean()
    {
        Session::forget('basket');
    }

    public static function getBasket()
    {
        return Session::get('basket');
    }

    public static function calculateCart()
    {
        $totalPrice = 0;
        $baskets = Session::get('basket');
        if (!empty($baskets))
        {
            foreach($baskets as $basket)
            {
                if ($basket[0]->discount_id)
                {
                    $price = self::calculateDiscount($basket[0]->price,$basket[0]->discount->price,$basket[0]->discount->percent);
                    $totalPrice = $totalPrice + ($price * $basket[1]);
                }else
                    $totalPrice = $totalPrice + ($basket[0]->price * $basket[1]);
            }
            return $totalPrice;
        }else
            return 0;
    }
    public static function addTokenDiscount($discountToken)
    {
        if (Session::has('discount'))
        {
            $previousDiscount = Session::get('discount');
            $discount = Discount::where('token', $discountToken)->first();
            if (!$discount)
                return null;
            $newDiscount = $previousDiscount;
            if (empty($newDiscount[$discountToken])) //if previous product is empty, create new product
                $newDiscount [$discountToken] = $discount;
            else
            {
                self::removeTokenDiscount($discountToken);
                return back();
            }
            Session::put('discount',$newDiscount);
        }
        else
        {
            $discount = Discount::where('token', $discountToken)->first();
            if (!$discount)
                return null;
            $newDiscount = [];
            $newDiscount [$discountToken] = $discount;
            Session::put('discount',$newDiscount);
        }
    }

    public static function removeTokenDiscount($discountToken)
    {
        if (Session::has('discount'))
        {
            $currentDiscount = Session::get('discount');
            if (!empty($currentDiscount[$discountToken]))
                unset($currentDiscount[$discountToken]);
            Session::put('discount',$currentDiscount);
        }
    }

    public static function cleanTokenDiscount()
    {
        Session::forget('discount');
    }

    public static function getTokenDiscount()
    {
        return Session::get('discount');
    }

    public static function calculateDiscountSession()
    {
        $totalDiscount = 0;
        $discounts = Session::get('discount');
        if (!empty($discounts))
        {
            foreach ($discounts as $discount)
                $totalDiscount = $totalDiscount + $discount->price;
        }
        return $totalDiscount;
    }

    public static function getProductImage($productID)
    {
        $product = ProductImage::where('product_id',$productID)->first();
        return $product->path;
    }
    public static function getProductName($productID)
    {
        $product = Product::find($productID);
        return $product->label;
    }
}
