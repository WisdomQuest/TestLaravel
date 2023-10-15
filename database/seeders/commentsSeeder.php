<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class commentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = ['Алексей', 'Иван', 'Петр', 'Павел', 'Юля', 'Лоя'];
        for ($i = 0; $i < 10; $i++) {
            $post_id = mt_rand(1, 10);
            $name = Arr::random($names);      //получает случайный элемент из переданного массива     //$names[mt_rand(0, count($names) - 1)];
            $text = Str::random(mt_rand(30, 99)); // рандомный текст (рандомной длины)
            $created_at = date('Y-m-d H:i:s');
            $updated_at = date('Y-m-d H:i:s');

           // добавление записей
            /* DB::insert(
                'INSERT INTO `comments`(`post_id`, `name`, `text`, `created_at`, `updated_at`) VALUES (?, ?, ?, ?, ?)',
                [$post_id, $name, $text, $created_at, $updated_at]
            ); */

            //добавление записей
            DB::table('comments')->insert([
                'post_id'=>$post_id,
                'name'=>$name,
                'text'=>$text,
                'created_at'=>$created_at,
                'updated_at'=>$updated_at,
            ]);

        }
    }
}
