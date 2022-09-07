<?php

namespace App\Actions;

use App\Models\Image;
use App\Models\Product;
use App\Models\Tool;

class ProductAction{
   static function addProduct($request){
        $newProduct = new Product();
        $newProduct->discount_id = $request->input('discount_id');
        $newProduct->category_id = $request->input('category_id');
        $newProduct->label = $request->input('label');
        $newProduct->description = $request->input('description');
        $newProduct->price = $request->input('price');
        $newProduct->count = $request->input('count');
        $newProduct->status = $request->input('status');
        $newProduct->save();
        $newProduct->tags()->sync($request->input('tags'));
        $paths = [];
        foreach ($request->file('images') as $image)
        {
            $paths[] = $image->storePubliclyAs(Tool::imagePath(),'image'.time().rand(1,10000).'.'.$image->extension());
        }
        foreach ($paths as $path)
        {
            $newProductImage = new Image();
            $newProductImage->product_id = $newProduct->id;
            $newProductImage->path = str_replace('public', 'storage', $path);
            $newProductImage->save();
        }
    }

    public static function updateProduct($request, $product_id)
    {
        $updateProduct = Product::find($product_id);
        $updateProduct->discount_id = $request->input('discount_id');
        $updateProduct->category_id = $request->input('category_id');
        $updateProduct->label = $request->input('label');
        $updateProduct->description = $request->input('description');
        $updateProduct->price = $request->input('price');
        $updateProduct->count = $request->input('count');
        $updateProduct->status = $request->input('status');
        $updateProduct->save();
        $updateProduct->tags()->sync($request->input('tags'));
        if ($request->hasFile('images'))
        {
            $paths = [];
            foreach ($request->file('images') as $image)
            {
                $paths[] = $image->storePubliclyAs(Tool::imagePath(),'image'.time().rand(1,10000).'.'.$image->extension());
            }
            foreach ($paths as $path)
            {
                $newProductImage = new Image();
                $newProductImage->product_id = $updateProduct->id;
                $newProductImage->path = str_replace('public', 'storage', $path);
                $newProductImage->save();
            }
        }
    }

    // public static function deleteProductImage($productImage_id)
    // {
    //     $image = Image::find($productImage_id);
    //     File::delete($image->path);
    //     $image->delete();
    // }
}