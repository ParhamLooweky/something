<?php 
namespace app\Actions;

use Spatie\Permission\Models\Permission;

class PermissionAction {
    function newPermission($request) {
        $newPermission= new Permission();
        
        $newPermission->name = $request->input('name'); 
        $newPermission->guard_name = $request->input('guard_name'); 
        
        $newPermission->save();
    }
}





?>