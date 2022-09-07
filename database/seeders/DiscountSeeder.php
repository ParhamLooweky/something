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
                'id' => 1,
                'label' => 'Weekend discounts',
                'price' => '500',
                'percentage' => null,
                'gift_code' => 'wewewe',
                'status' => 1
            ],
            [
                'id' => 2,
                'label' => 'Special occasions discount',
                'price' => 1000,
                'percentage' => null,
                'gift_code' => 'wqwqwq',
                'status' => 0
            ],
            [
                'id' => 3,
                'label' => 'opdosakm',
                'price' => 1000,
                'percentage' => null,
                'gift_code' => 'dsc',
                'status' => 0
            ],
            [
                'id' => 4,
                'label' => 'Special  discount',
                'price' => 1000,
                'percentage' => null,
                'gift_code' => 'gfv',
                'status' => 0
            ],
            [
                'id' => 5,
                'label' => 'Special occasions ',
                'price' => 1000,
                'percentage' => null,
                'gift_code' => 'cxzvrfg',
                'status' => 0
            ],
            
        ];

        Discount::insert($discounts);
    }
}
