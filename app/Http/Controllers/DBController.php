<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class DBController extends Controller
{
    public function commentsAdd()
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
            echo '------------------------';
        }
        return '';
    }

    public function testDatabase()
    {

        $users = DB::table('users')->get();
        $news = DB::table('news')->get();
        $authors = DB::table('authors')->get();
        $comments = DB::table('comments')->get();

//        return view('user.index', ['users' => $users]);
        return view('testDatabase', [
            'users' => $users,
            'news' => $news,
            'authors' => $authors,
            'comments' => $comments
        ]);
    }

    public function testDatabaseDelete($table, $id)
    {
        $users = DB::table('users')->find($id);
        $news = DB::table('news')->find($id);
        $authors = DB::table('authors')->find($id);
        $comments = DB::table('comments')->find($id);
        if (isset($users) && $table == 'users') {
            DB::delete('DELETE FROM `users` WHERE `id`= :id', ['id' => $id]);
            return 'запись удаленна';
        } elseif (isset($news) && $table == 'news') {
            DB::delete('DELETE FROM `news` WHERE `id`= :id', ['id' => $id]);
            return 'запись удаленна';
        } elseif (isset($authors) && $table == 'authors') {
            DB::delete('DELETE FROM `authors` WHERE `id`= :id', ['id' => $id]);
            return 'запись удаленна';
        } elseif (isset($comments) && $table == 'comments') {
            DB::delete('DELETE FROM `comments` WHERE `id`= :id', ['id' => $id]);
            return 'запись удаленна';
        }
        abort(404);
    }

    public function newsAdd($author_id= null, $title=null, $text=null)
    {
        if (isset($author_id, $title,$text)) {

            DB::insert('INSERT INTO `news` (`author_id`, `title`, `text`) VALUES (?,?,?)',
                [$author_id, $title, $text]
            );
            return redirect('testdatabase');
        }
        return '';
    }


}
