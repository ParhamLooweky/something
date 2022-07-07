<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegController extends Controller
{
    public function Register(){
        return view('public.Register.register');
    }

    public function Login(){
        return view('public.login.login');
    }
}
