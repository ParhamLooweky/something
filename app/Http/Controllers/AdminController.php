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
}
