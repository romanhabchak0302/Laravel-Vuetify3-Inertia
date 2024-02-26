<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'is_admin' => true,
                'status' => 'approved',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'is_admin' => false,
                'status' => 'approved',
                'password' => Hash::make('password'),
            ]
        ];
        DB::table('users')->insert($users);
    }
}
