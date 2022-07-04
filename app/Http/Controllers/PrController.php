<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrController extends Controller
{
    public function Cart(){
        return view('public.PR.cart');
}
public function Billing(){
        return view('public.PR.pay');
}
}
