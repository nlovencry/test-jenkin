<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //User Seeder

        DB::table('users')->insert([
            'name'      => 'Admin',
            'username'  => 'admin',
            'email'     => 'admin@admin.com',
            'role'      => 1,
            'password'  => Hash::make('adminadmin'),
        ]);
        DB::table('users')->insert([
            'name'      => 'User Demo',
            'username'  => 'user',
            'email'     => 'user@demo.com',
            'role'      => 2,
            'password'  => Hash::make('useruser'),
        ]);
    }
}
