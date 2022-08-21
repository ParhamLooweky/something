<?php 
namespace app\Actions;

use Spatie\Permission\Models\Permission;

class PermissionAction {
    function newPermission($request) {
        
        Permission::create($request->all());

        return back();
    }

    function updatePermission($request, $permission_id ){
        $updatePermission =Permission::find($permission_id);

        $updatePermission->name = $request->input('name');
        $updatePermission->guard_name = $request->input('guard_name');
        $updatePermission->update();
        return back();


    }
}





?>