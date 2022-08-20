<?php

namespace app\Actions;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserAction{
    public static function addUser($request){
        $uniqueParameter = ['phone' => 0, 'email' => 0];
        $phone = $request->input('phone');
        $email = $request->input('email');
        if (self::checkPhone($phone) == true)
        {
            $uniqueParameter['phone'] = 1;
            return $uniqueParameter;
        }
        if (self::checkEmail($email) == true)
        {
            $uniqueParameter['email'] = 1;
            return $uniqueParameter;
        }

    
   
        
        
        
        
        
        
        
        $newUser = new User();

        $newUser->name = $request->input('name');
        $newUser->phone = $request->input('phone');
        $newUser->email = $request->input('email');
        $newUser->password = Hash::make($request->input('password'));
        $newUser->status = $request->input('status');
        $newUser->save();
        
        $newUser->syncRoles(Role::findById($request->input('role')));
        return $uniqueParameter;
    }


    private static function checkPhone($phone){
        $check= User::where('phone',$phone)->first();
        if($check)
            return true;
        else
            return false;
    }

    private static function checkEmail($email){
        $check= User::where('email',$email)->first();
        if($check)
            return true;
        else
            return false;
        
    }

    public static function updateUser($request, $user_id){
        $newUser = User::find($user_id);
    }
}