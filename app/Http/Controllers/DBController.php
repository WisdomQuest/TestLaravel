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

    public function newsAdd($author_id = null, $title = null, $text = null)
    {
        if (isset($author_id, $title, $text)) {

            DB::insert('INSERT INTO `news` (`author_id`, `title`, `text`) VALUES (?,?,?)',
                [$author_id, $title, $text]
            );
            return redirect('testdatabase');
        }
        return '';
    }

    public function testQueryBuilder()
    {
        /*        DB::table('comments')->insert([
                    ['post_id' => 5, 'name' => 'alla', 'text' => 'мой комментарий',],
                    ['post_id' => 1, 'name' => 'dima', 'text' => 'dima комментарий',]
                ]);

                DB::table('comments')->where('post_id', 5)->update(['post_id' => 6]);
                DB::table('comments')->where('post_id', 6)->increment('post_id', 6);
                DB::table('comments')->where('post_id', 12)->delete();*/

        /*        $comments = DB::table('comments')->get();
                echo gettype($comments) . '<br />';
                foreach ($comments as $comment) {
                    echo $comment->post_id . '<br />';
                    echo $comment->name . '<br />';
                    echo $comment->text . '<br />';
                    echo '----------------------------------------- <br />';
                }*/
        /*$comments=DB::table('comments')->where('post_id', 3)->get();
        print_r($comments);
        echo '<br />----------------------------------------- <br />';
        $comments=DB::table('comments')->where('post_id', 3)->first();
        print_r($comments);
        echo '<br />----------------------------------------- <br />';
        $comments=DB::table('comments')->where('post_id', '>',3)->get();
        print_r($comments);
        echo '<br />----------------------------------------- <br />';*/

        /*    $comments=DB::table('comments')->where('name', 'LIKE','%ек%')->get();
            print_r($comments);
            echo '<br />----------------------------------------- <br />';*/

        /*        $comments=DB::table('comments')
                    ->where('post_id', '>','3')
                    ->where('name','Павел')
                    ->get();
        //        SELECT *FROM `comments` WHERE `post_id` > 3 AND `name` = 'Павел'
                print_r($comments);
                echo '<br />----------------------------------------- <br />';*/


//        $comments=DB::table('comments')->whereBetween('id',[2,4] )->get();
//        print_r($comments);
//        echo '<br />----------------------------------------- <br />';
//        $comments=DB::table('comments')->whereNotBetween('id',[2,4] )->get();
//        print_r($comments);
//        echo '<br />----------------------------------------- <br />';

        /*        $comments = DB::table('comments')->whereIn('id', [2, 6])->get();
        //        SELECT *FROM `comments` WHERE `id` IN (2, 6)
                print_r($comments);
                echo '<br />----------------------------------------- <br />';*/

        /* $comments = DB::table('comments')->whereNotNull('post_id')->get();
         print_r($comments);
         echo '<br />----------------------------------------- <br />';
         $comments = DB::table('comments')->whereNull('post_id')->get();
         print_r($comments);
         echo '<br />----------------------------------------- <br />';*/

        /*        $comments = DB::table('comments')
                    ->where('post_id', 3)
                    ->orWhere('post_id', 10)
                    ->get();
                print_r($comments);
                echo '<br />----------------------------------------- <br />';*/

        /*  $comments = DB::table('comments')->where(function ($query) {
              $query->where('post_id', 3)->where('name', 'Иван');
          })->orWhere('post_id', 10)
              ->get();
          print_r($comments);
          echo '<br />----------------------------------------- <br />';*/

        //запись по id
        /* $comments = DB::table('comments')->find(4);
         print_r($comments);
         echo '<br />----------------------------------------- <br />';*/

        /* $comments = DB::table('comments')->select(['id', 'name'])->where('post_id', 1)->get();
         print_r($comments);
         echo '<br />----------------------------------------- <br />';*/

        /*//сортировка по возрастанию
                $comments=DB::table('comments')->orderBy('name')->get();
                print_r($comments);
                echo '<br />----------------------------------------- <br />';
        //сортировка по убыванию
         $comments=DB::table('comments')->orderByDesc('name')->get();
                print_r($comments);
                echo '<br />----------------------------------------- <br />';*/

        /*        $comments=DB::table('comments')->inRandomOrder()->get();
                print_r($comments);
                echo '<br />----------------------------------------- <br />';*/

//сортировка по возрастанию
        /*        $comments=DB::table('comments')->orderBy('name')->orderBy('id')->get();
                print_r($comments);
                echo '<br />----------------------------------------- <br />';*/

        /*        $comments=DB::table('comments')->limit(3)->offset(4)->get();
                print_r($comments);
                echo '<br />----------------------------------------- <br />';*/

        /*    echo DB::table('comments')->count() . '<br />';
            echo DB::table('comments')->where('post_id', 1)->count()  . '<br />';
            echo DB::table('comments')->max('post_id')  . '<br />';
            echo DB::table('comments')->avg('post_id')  . '<br />';
            echo DB::table('comments')->sum('post_id')  . '<br />';
            //проверяет существует ли запись
            echo DB::table('comments')->where('post_id', 12)->exists()  . '<br />';*/

        //отладка
        /*  DB::table('comments')->where('post_id', 3)->dd();*/

        // извлекает колличеством по сount записи... для очень большой выборки..
        DB::table('comments')->orderBy('id')->chunk(3, function ($comments) {
            foreach ($comments as $comment) {
                print_r($comment);
                echo '<br />';
            }
            echo '<br />------------------- <br>';
        });

        //извлечение по одной записи. удобнее писать чем chunk ,но медленнее
        DB::table('comments')->orderBy('id')->lazy()->each(function ($comment) {
            print_r($comment);
            echo '<br />';
        });

        return '';
    }

    public function news()
    {
        $news = DB::table('news')->paginate(5);
//        $sortUp = $news->items();
//        $sortDown = $news->items();
//        $sortUp = DB::table('news')->orderBy('author_id')->paginate(5);
//        $sortDown = DB::table('news')->orderByDesc('author_id')->paginate(5);
//        'sortUp' => $sortUp, 'sortDown' => $sortDown
        return view('news', ['news' => $news, ]);
    }

    public function testPagination()
    {
        $comment = 'comments';
        $comments = DB::table($comment)->paginate(10);


        return view('pagination', ['comments' => $comments]);
    }

}
