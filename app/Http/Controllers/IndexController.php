<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
public function index(){
    return view('public.home.index');
}

public function contact(){
    return view('public.contact.contact');
}
}
