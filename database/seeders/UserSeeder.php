<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Role::where('name','ADMIN')->first();
        User::create([
            'name'=>'reem',
            'email'=>'reemanashalabia@gmail.com',
            'password'=> Hash::make('reem1234512345'),
            'role_id'=>$admin->id,
        ]);
        User::create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=> Hash::make('admin1234512345'),
            'role_id'=>$admin->id,
        ]);
    }
}
