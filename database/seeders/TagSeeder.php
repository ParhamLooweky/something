<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Tags = [
            ['label' => 'Shirts'],
            ['label' => 'Pants'],
            ['label' => 'Dress'],
            ['label' => 'Kids'],
            ['label' => 'Sport'],
        ];

        Tag::insert($Tags);

    }
}
