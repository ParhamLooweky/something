<?php

namespace Database\Seeders;

use Faker\Provider\ar_EG\Person;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = [
            ['name' => 'full_access', 'guard_name' => 'web'],
            ['name' => 'limited_access', 'guard_name' => 'web']
        ];

        Permission::insert($permission);
    }
}
