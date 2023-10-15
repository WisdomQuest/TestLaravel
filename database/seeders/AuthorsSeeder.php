<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            $user_id = mt_rand(1, 10);
            $work_experience = mt_rand(1, 10);
            $created_at = date('Y-m-d H:i');
            DB::table('authors')->insert([
                'user_id' => $user_id,
                'work_experience' => $work_experience,
                'created_at' => $created_at
            ]);
        }

    }
}
