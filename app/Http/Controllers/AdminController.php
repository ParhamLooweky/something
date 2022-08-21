<?php

namespace App\Http\Controllers;

use app\Actions\PermissionAction;
use App\Actions\UserAction;
use App\Http\Requests\UserNameRequest;
use App\Models\User;
use Faker\Provider\ar_EG\Person;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Symfony\Component\HttpKernel\Event\ViewEvent;

class AdminController extends Controller
{
    public function adminMain (){
        return view('admin.layout.adminLayout');
    }
    
    
    
    public function adminVisit(){
        
        $users = User::all();
        
        return view('admin.user.adminVisitUser', compact('users'));
    }

    public function addUser(){
        $roles = Role::all();
        return view('admin.user.adminAddUser', compact('roles'));
    }
    public function adminPostUser(UserNameRequest $request){
        $action = UserAction::addUser($request);
        if ($action['phone']==1)
            return redirect()->back()->with('danger','This phone number exists');
        if($action['email']==1)
            redirect()->back()->with('danger','This email already exists');

            return redirect(route('adminvisit'));
    }

    public function adminPerm(){
        $permissions = Permission::all();
        
        
        return view('admin.permission.adminVisitPermission',compact('permissions'));

    }
    public function adminAddPerm(){

        return view('admin.permission.adminAddPermission');
    }

    public function adminPostPermission(Request $request, $permission_id){
        PermissionAction::newPermission($request, $permission_id);
        return redirect(route('permvisit'));
        
    }

    public function adminRoles(){
        return view('admin.role.adminVisitRole');
    }

    public function adminAddRoles(){
        return view('admin.role.adminAddRole');
    }

    public function adminCategory(){
        return view('admin.category.adminVisitCategory');
    }

    public function adminAddCategory(){
        return view('admin.category.adminAddCategory');
    }

    public function adminVisitTag(){
        return view('admin.tag.adminVisitTag');
    }

    public function adminAddTag(){
        return view('admin.tag.adminAddTag');
    }

    public function adminDiscount(){
        return view('admin.discount.adminVisitDiscount');
    }

    public function adminAddDiscount(){
        return view('admin.discount.adminAddDiscount');
    }

    public function adminProducts(){
        return view('admin.product.adminVisitProduct');
    }

    public function adminAddProducts(){
        return view('admin.product.adminAddProduct');
    }
    public function adminComment(){
        return view('admin.comment.adminVisitComment');
    }

    public function adminVisitProvince(){
        return view('admin.RCZ.adminVisitRegion');
    }

    public function adminAddProvince(){
        return view('admin.RCZ.adminAddRegion');
    }

    public function adminVisitCity(){
        return view('admin.RCZ.adminVisitCity');
    }

    public function adminAddCity(){
        return view('admin.RCZ.adminAddCity');
    }

    public function adminAddress(){
        return view('admin.address.adminVisitAddress');
    }

    public function adminFactors(){
        return view('admin.order.adminVisitOrder');
    }
    public function adminTransfer(){
        return view('admin.transaction.adminVisitTransaction');
    }

    public function adminContact(){
        return view('admin.contact.adminVisitContact');
    }
    // update functions \\
    public function updateUser($user_id){
        $user = User::find($user_id);

        $roles= Role::all();

        
        
        
        return view('admin.user.adminUpdateUser', compact('user', 'roles'));
        

    }

    public function updatePostUser(Request $request, $user_id){
        $action = UserAction::updateUser($request, $user_id);
        if ($action['phone']==1)
            return redirect()->back()->with('danger','This phone number exists');
        if($action['email']==1)
            redirect()->back()->with('danger','This email already exists');

        return redirect(route('adminvisit'));

    }

    public function updatePermission(Permission $permission){

        return view('admin.permission.adminUpdatePermission');
    }
    public function updatePostPermission($request, Permission $permission){
        ;
    }

    public function updateCategory(){
        return view('admin.category.adminUpdateCategory');
    }

    public function updateTag(){
        return view('admin.tag.adminUpdateTag');
    }

    public function updateDiscount(){
        return view('admin.discount.adminUpdateDiscount');
    }

    public function updateProduct(){
        return view('admin.product.adminUpdateProduct');
    }

    public function updateComment(){
        return view('admin.comment.adminUpdateComment');
    }

    public function updateProvince(){
        return view('admin.RCZ.adminUpdateRegion');
    }

    public function updateCity(){
        return view('admin.RCZ.adminUpdateCity');
    }
    //delete functions
    
    public function deleteAccess(){
        return view('admin.permission.adminVisitPermission');
        
    }

    public function deleteRole(){
        return view('admin.role.adminVisitRole');
    }
    
    public function deleteAddress(){
        return view('admin.address.adminVisitAddress');
    }
   

}
