<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class DBController extends Controller
{
    public function testDB()
    {

        /*        $names = ['Алексей', 'Иван', 'Петр', 'Павел', 'Юля', 'Лоя'];
                $post_id = mt_rand(1, 10);
                $name = Arr::random($names);      //получает случайный элемент из переданного массива     //$names[mt_rand(0, count($names) - 1)];
                $text = Str::random(mt_rand(30, 99)); // рандомный текст (рандомной длины)
                $created_at = date('Y-m-d H:i:s');
                $updated_at = date('Y-m-d H:i:s');

                // добавление записей
                echo DB::insert(
                    'INSERT INTO `comments`(`post_id`, `name`, `text`, `created_at`, `updated_at`) VALUES (?, ?, ?, ?, ?)',
                    [$post_id, $name, $text, $created_at, $updated_at]
                );*/

        // обновление записей
//        echo DB::update(
//            'UPDATE `comments` SET `post_id` = ? WHERE `post_id` = ?',
//            [8, 1]
//        );

//        echo DB::delete('DELETE FROM `comments` WHERE `name` = :name', ['name' => 'Иван']);

/*        DB::insert('INSERT INTO `comments`(`post_id`, `name`, `text`) VALUES (?, ?, ?)', [2, 'Ola', 'text text']);
        DB::update('UPDATE `comments` SET `post_id` = ? WHERE `post_id` = ?', [4, 2]);*/

        //выполниться либо все лбо ничего
/*        DB::transaction(function () {
            DB::insert('INSERT INTO `comments`(`post_id`, `name`, `text`) VALUES (?, ?, ?)', [1, 'Ola', 'text text']);
            DB::update('UPDATE `comments` SET `post_id` = ? WHERE `post_id` = ?', [4, 77]);
        });*/

        $comment = DB::select('SELECT * FROM `comments`');
        echo gettype($comment) . '<br>';
//        var_dump($comment);
        foreach ($comment as $com) {
            echo $com->post_id . '<br>';
            echo $com->name . '<br>';
            echo $com->text . '<br>';

        }



        return '';
    }
}
