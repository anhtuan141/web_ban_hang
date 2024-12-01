<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('users')->insert([
                'name' => "name {$i}",
                'username' => "admin{$i}",
                'password' => "123456",
                'status' => 1,
                'phone' => "12345678{$i}",
                'email' => "admin{$i}@gmail.com",
                'token' => '',
                'role' => 1,
            ]);
        }
    }
}
