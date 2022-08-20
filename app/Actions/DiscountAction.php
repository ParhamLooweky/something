<?php
namespace app\Actions;

use app;
use App\Models\Discount;

 class DiscountAction {
    public static function newDiscount($request) {
        
        $newDiscount = new Discount();
        
        $newDiscount->label = $request->input('label');
        $newDiscount->price = $request->input('price');
        $newDiscount->status = $request->input('status');
        $newDiscount->gift_code = $request->input('gift_code');
        $newDiscount->percent = $request->input('percent');
        
        $newDiscount->save();
     }
 }
 
 ?>