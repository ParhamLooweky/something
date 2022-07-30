<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'address_id',
        'discount_id',
        'total_price',
        'pay_price',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    public function discount()
    {
        return $this->belongsTo(Discount::class);
    }

    public function orderListItems()
    {
        return $this->hasMany(OrderListItem::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
