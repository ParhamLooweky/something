<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{

public function index(){
    return view('public.home.index');
}

public function Contact(){
    return view('public.contact.contact');
}

public function Simple(){
    return view('public.layout.simple');
}

public function Test(){
    return view('public.test');
}

}
