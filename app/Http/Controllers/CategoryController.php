<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function maleproducts(){
        return view('public.Categories.Male.maleproduct');
    }

    public function femaleproducts(){
        return view('public.Categories.femaleproduct');
    }
}
