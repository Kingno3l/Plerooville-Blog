<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            //Admin user
            [
                'name' => 'admin',
                'username' => 'admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('111'),
                'role' => 'admin',
                'status' => 'active',
            ],

            //Author
            [
                'name' => 'editor',
                'username' => 'editor',
                'email' => 'editor@example.com',
                'password' => Hash::make('111'),
                'role' => 'editor',
                'status' => 'active',
            ],

            //Users
            [
                'name' => 'user',
                'username' => 'user',
                'email' => 'user@example.com',
                'password' => Hash::make('111'),
                'role' => 'user',
                'status' => 'active',
            ]
        ]);
        
    }
}
