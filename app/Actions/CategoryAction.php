<?php

namespace app\Actions;

use App\Models\Category;

class categoryAction{
    static function addCategory($request){
        $newCategory = new Category();

        $newCategory->label= $request->input('label');
        $newCategory->label= $request->input('status');
        $newCategory->label= $request->input('parent_id');
        $newCategory->label= $request->input('discount_id');

        $newCategory->save();
        return back();
    }
}