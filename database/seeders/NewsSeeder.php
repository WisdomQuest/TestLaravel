<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            $author_id = mt_rand(1, 10);
            $title = STR::random(mt_rand(3, 15));
            $text = STR::random(mt_rand(3, 100));
            $created_at = date('Y-m-d H:i:s');
            DB::table('news')->insert([
                'author_id' => $author_id,
                'title' => $title,
                'text' => $text,
                'created_at' => $created_at,
            ]);
        }
    }
}
