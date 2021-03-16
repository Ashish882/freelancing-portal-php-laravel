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
     

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'login_type' => '1',
            'password' => Hash::make('admin'),
          ]);

          DB::table('users')->insert([
            'name' => 'employee',
            'email' => 'employee@gmail.com',
            'login_type' => '2',
            'password' => Hash::make('employee'),
          ]);

          DB::table('users')->insert([
            'name' => 'freelancer',
            'email' => 'freelancer@gmail.com',
            'login_type' => '3',
            'password' => Hash::make('freelancer'),
          ]);
    }
}
