<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
  DB::table('users')->insert([
    'name' => 'the admin user',
    'email' => 'iamadmin@gmail.com',
    'login_type' => '1',
    'password' => Hash::make('password'),
  ]);
  DB::table('users')->insert([
    'name' => 'the seller user',
    'email' => 'iamaseller@gmail.com',
    'login_type' => '2',
    'password' => Hash::make('password'),
  ]);
    }
}
