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
}
