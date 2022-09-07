<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            //MEN
            [
                'id' => 1,
                'discount_id' => null,
                'category_id' => 3,
                'label' => 'Hoodie',
                'description' => 'good',
                'price' => 49,
                'count' => 2,
            ],
            [
                'id' => 2,
                'discount_id' => null,
                'category_id' => 3,
                'label' => 'Hoodie',
                'description' => 'good',
                'price' => 39,
                'count' => 2,
            ],
            [
                'id' => 3,
                'discount_id' => null,
                'category_id' => 3,
                'label' => 'Hoodie',
                'description' => 'good',
                'price' => 29,
                'count' => 2,
            ],
            [
                'id' => 4,
                'discount_id' => null,
                'category_id' => 3,
                'label' => 'Hoodie',
                'description' => 'good',
                'price' => 20,
                'count' => 2,
            ],
           
        ];
        Product::insert($products);
        //All Product Image
        $productImages = [
            //MEN IMAGE
            [
                'product_id' => 1,
                'path' => 'public/assets/images/shop/jacket2-1-700x893.jpg'
            ],
            [
                'product_id' => 2,
                'path' => 'public/assets/images/shop/jacket2-2-700x893.jpg'
            ],
            [
                'product_id' => 3,
                'path' => 'public/assets/images/shop/jacket2-2-700x893.jpg'
            ],
            [
                'product_id' => 4,
                'path' => 'public/assets/images/shop/jacket2-2-700x893.jpg'
            ]
         
        ];
        Image::insert($productImages);
        $Tags = [
            ['product_id' => 1 ,'tag_id'=> 1],
            ['product_id' => 1 ,'tag_id'=> 2],
        ];
        DB::table('product_tag')->insert($Tags);
    }
}
