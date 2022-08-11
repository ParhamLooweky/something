<?php

namespace App\Actions;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserAction{
    public static function addUser($request){
        $newUser = new User();

        $newUser->name = $request->input('name');
        $newUser->phone = $phone;
        $newUser->email = $email;
        $newUser->password = Hash::make($request->input('password'));
    }
}