<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermController extends Controller
{
    public function Terms(){
        return view('public.Terms.shopterms');
    }
}
