<?php

namespace app\Actions;

use App\Models\Tag;

class TagAction{
    public static function addTag($grab){
        $newTag = new Tag();

        $newTag->label = $grab->input('label');
        $newTag->status = $grab->input('status');

        $newTag->save();
        
    }
}