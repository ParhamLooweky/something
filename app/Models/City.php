<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = [
        'label',
        'status'
    ];

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function zones()
    {
        return $this->hasMany(Zone::class);
    }
}
