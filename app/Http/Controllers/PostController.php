<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Author;
use App\Models\Client;
use App\Models\Comment;
use App\Models\NumberPhone;
use App\Models\Order;
use App\Models\Post;
use App\Models\Product;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;


class PostController extends Controller
{

    public function testModel()
    {
        /*     $post = new Post();
             $post->author = 'Флекс';
             $post->title = 'новый пост';
             $post->is_publish = false;
             $post->save();

             $post = Post::factory()->make();
             echo $post->author;
             $post->title = 'Важный пост';
             $post->save();
        */
        /* $post = Post::create(['author' => 'Иван', 'is_publish' => true]);
         echo $post->title . '<br>';*/

        $post = Post::find(5);
        echo $post->title . '<br />';
        echo $post->isClean() . '<br />'; // проверяет изменялась ли модель после извлечения из БД (1(true)-не изменялось)
        $post->title = 'new title 3';

        echo $post->isDirty('title') . '<br />'; // проверяет изменялась ли модель после извлечения из БД (1(true)-изменялось), в скобках по конкретному полю можно указать

        //извлекать все данные
        foreach (Post::all() as $post) {
            echo $post->title . '<br />';
        }
        echo '----------------------------------------<br />';
//         $post = Post::findOrFail(100); // находит или выдает ошибку 404

        $posts = Post::where('is_publish', 1)->get();
        foreach ($posts as $post) {
            echo $post->title . '<br />';
        }
        echo '----------------------------------------<br />';

        $post = Post::where('is_publish', 0)->first();
        echo $post->author . '<br />';
        echo '----------------------------------------<br />';

        $posts = Post::where('is_publish', 1)->orderByDesc('author')->get();
        foreach ($posts as $post) {
            echo $post->author . '<br />';
        }
        echo '----------------------------------------<br />';

        $posts = Post::all();
        $posts = $posts->reject(function ($post) { // отфильтровали выборку убрав автора из функции замыкания
            return $post->author == 'Нина Дмитриевна Русакова';
        });
        foreach ($posts as $post) {
            echo $post->author . '<br />';
        }
        echo '----------------------------------------<br />';

        Post::where('is_publish', 1)->chunk(3, function ($posts) {
            foreach ($posts as $post) {
                echo $post->author . '<br />';
            }
        });
        echo '----------------------------------------<br />';

        foreach (Post::where('is_publish', 0)->cursor() as $post) { //извлечяение по однойц записи
            echo $post->title . '<br />';
        }
        echo '----------------------------------------<br />';

        echo Post::where('is_publish', 1)->count() . '<br />';
        echo '----------------------------------------<br />';

        Post::where('id', '<', 5)->update(['is_publish' => 0,]);

        //   Post::find(3)->delete();  // сначало извлекает потом удаляет... если отсуствует будет ошибка..
        //     Post::destroy(4); // удаление строки , можно массивом указать несколько Post::destroy([4, 2])

        //фейковое- мягкое удаление, скрывает но в базе остается:в Post.php подключить use SoftDeletes; и добавить в создание таблицы это поле..
        Post::destroy(3);

        //вывод с удаленными записями
        $posts = Post::withTrashed()->get();

//        $posts = Post::all();
        foreach ($posts as $post) {
            echo $post->author . '<br />';
        }

        echo '----------------------------------------<br />';

        $posts = Post::where('id', '>', 3)->get();
        foreach ($posts as $post) {
            echo $post->author . '<br />';
        }

        return '';
    }

    public function testAM()
    {
        $post = Post::find(1);
        echo $post->author;
        $post->author = 'Новый автор';
        $post->save();

        echo '<br>' . gettype($post->is_publish);
        return '';
    }

    public function testObserver()
    {
        $post = Post::factory()->make();
        $post->title = 'Важный пост';
        $post->save();

        $post = Post::orderByDesc('id')->first();
        $post->author = 'vov';
        $post->save();
        $post->delete();
        $post->restore();
        $post->forceDelete();
        return 'testobserver';
    }

    public function testRelations()
    {
        $client = Client::find(1);
        echo $client->name . '<br />';
        echo $client->address->address . '<br />';
        echo '---------------------------- <br>';

        $address = Address::find(3);
        echo $address->address . '<br />';
        echo $address->client->name . '<br />';

        /*$add = Address::find(11);
        $add->id = 10;
        $add->save();*/

        echo '-------------------------------------------------- <br>';
        echo '-------------------------------------------------- <br>';

        $orders = Client::find(4)->orders;
        foreach ($orders as $order) {
            echo $order->id . '<br />';
        }

        $client = Order::find(1);
        echo $client->client->name . '<br />';

        echo '<hr>';
        echo '<hr>';

        $products = Order::find(1)->products;
        foreach ($products as $product) {
            echo $product->title . '<br />';
        }
        echo '-------------------------------------------------- <br>';
        echo '-------------------------------------------------- <br>';

        $orders = Product::find(1)->orders;
        foreach ($orders as $order) {
            echo $order->client->name .'<br /> ';

        }





        return '';
    }

    public function testPhone()
    {
        /*$author = Author::find(1);
        echo $author->phone->phone . '<br />';
        echo '-------------- <br />';

        $phone = NumberPhone::find(1);
        echo $phone->author->id;*/

        $authors = Author::all();


        return view('author', ['authors' => $authors]);
    }

    public function testcomment()
    {
//        echo Comment::find(1)->user->name;

        /*        $user = User::find(8)->comments;
                $a = User::find(8)->name;
                echo $a;
                foreach ($user as $value) {
                    echo   $value->text . '<br />' ;
                }*/
        $comments = Comment::all();
//        $author = Comment::all()->user->name;
        foreach ($comments as $comment) {
            $author = $comment->user;
            echo $comment->text . ' автор <b>' . $author->name . '</b> дата ' . $comment->created_at . '<br />';
        }
        return '';
    }

    public function authors()
    {
/*        $authors =Author::find(1)->skills;

        foreach ($authors as $author) {
            echo  $author->id . '<br/>';
        }
        echo '<hr>';

        $clients = Skill::find(1)->authors;
        foreach ($clients as $client) {
            echo  $client->id . '<br/>';
        }
        return '';*/

        return view('author',['authors' => Author::all()]);
    }
}
