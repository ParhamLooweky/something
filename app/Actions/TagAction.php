<?php

namespace App\Actions;

use App\Models\Tag;

class TagAction {
    public static function addTag($request){
            dd('dsda');
     $newTag = new Tag();

        $newTag->label = $request->input('label');
        $newTag->status = $request->input('status');

        $newTag->save();

        return back();
    }

    public static function updateTag($request, $tag_id){
        ;
    }


        
    
}

