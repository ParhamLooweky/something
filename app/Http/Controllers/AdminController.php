<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminMain (){
        return view('admin.layout.adminLayout');
    }
    public function adminVisit(){
        return view('admin.user.adminVisitUser');
    }

    public function addUser(){
        return view('admin.user.adminAddUser');
    }
    public function adminPerm(){
        return view('admin.permission.adminVisitPermission');
    }
    public function adminAddPerm(){
        return view('admin.permission.adminAddPermission');
    }
    public function adminRoles(){
        return view('admin.role.adminVisitRole');
    }

    public function adminAddRoles(){
        return view('admin.role.adminAddRole');
    }

    public function adminCategory(){
        return view('admin.category.adminVisitCategory');
    }

    public function adminAddCategory(){
        return view('admin.category.adminAddCategory');
    }

    public function adminVisitTag(){
        return view('admin.tag.adminVisitTag');
    }

    public function adminAddTag(){
        return view('admin.tag.adminAddTag');
    }

    public function adminDiscount(){
        return view('admin.discount.adminVisitDiscount');
    }

    public function adminAddDiscount(){
        return view('admin.discount.adminAddDiscount');
    }

    public function adminProducts(){
        return view('admin.product.adminVisitProduct');
    }

    public function adminAddProducts(){
        return view('admin.product.adminAddProduct');
    }
    public function adminComment(){
        return view('admin.comment.adminVisitComment');
    }

    public function adminVisitProvince(){
        return view('admin.RCZ.adminVisitRegion');
    }

    public function adminAddProvince(){
        return view('admin.RCZ.adminAddRegion');
    }

    public function adminVisitCity(){
        return view('admin.RCZ.adminVisitCity');
    }

    public function adminAddCity(){
        return view('admin.RCZ.adminAddCity');
    }

    public function adminAddress(){
        return view('admin.address.adminVisitAddress');
    }

    public function adminFactors(){
        return view('admin.order.adminVisitOrder');
    }
    public function adminTransfer(){
        return view('admin.transaction.adminVisitTransaction');
    }

    public function adminContact(){
        return view('admin.contact.adminVisitContact');
    }
}
