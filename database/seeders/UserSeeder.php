<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name'=> 'admin', 'guard_name'=>'web'
            
        ]);
        
        Role::create([
            'name'=> 'User', 'guard_name'=> 'web'
        ]);

        $user = User::create([
            'name'=> ' mahdi ghiasy',
            'phone'=> ' 91234569',
            'email'=> ' bsssss@gmail.com',
            'status'=> 1,
            'password'=> Hash::make('123456')
        ]);

        $user->syncRoles(Role::findByName('admin'));
    
    }

}