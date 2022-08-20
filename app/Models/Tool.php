<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Tool 
{
    public static function gettl(){
        return 'Shop';
    }

    public static function admintl(){
        return 'Admin';
    }

    public static function userHasRole($role_id,$user_id ){
        $check = DB::table('model_has_roles')
        ->where('role_id',$role_id)
        ->where('model_id',$user_id)->first();

        if( $check)
            return true;

        else
            return false;


    }
}