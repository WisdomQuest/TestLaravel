<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            $name=fake()->name();
            $email = fake()->unique()->safeEmail();
            $email_verified_at = now();
            $password = Str::random(mt_rand(8,20));
            $remember_token = Str::random(10);

            DB::table('users')->insert([
                'name' =>$name,
                'email' => $email,
                'email_verified_at' => $email_verified_at,
                'password' => $password, // password
                'remember_token' =>$remember_token ,
            ]);
        }
    }
}
