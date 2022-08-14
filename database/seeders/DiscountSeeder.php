<?php

namespace Database\Seeders;

use App\Models\Discount;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $discounts = [
            [
                'label' => 'Weekend discounts',
                'price' => '500',
                'percent' => null,
                'gift_code' => null,
                'status' => 1
            ],
            [
                'label' => 'Special occasions discount',
                'price' => 1000,
                'percent' => null,
                'gift_code' => 'wqwqwq',
                'status' => 0
            ]
            
        ];
        Discount::insert($discounts);
    }
}
