<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' =>'Admin',
            'role' =>'admin',
            'phone' =>'01791205437',
            'address' =>'Uttara,Dhaka',
            'email' =>'admin@gmail.com',
            'password' =>Hash::make('123456'),
        ]);
        User::create([
            'name' =>'User',
            'role' =>'user',
            'phone' =>'01631916786',
            'address' =>'Uttara,Dhaka',
            'email' =>'user@gmail.com',
            'password' =>Hash::make('123456'),
        ]);
    }
}
