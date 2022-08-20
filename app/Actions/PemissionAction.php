<?php

namespace app\Actions;

use Spatie\Permission\Models\Permission;

class PermissionAction{
    public static function addPermission ($get){
        $newPermission = new Permission();
         $newPermission->name = $get->input('name');
         $newPermission->guard_name = $get->input('guard_name');

         $newPermission->save();

    }
}