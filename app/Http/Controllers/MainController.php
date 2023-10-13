<?php

namespace App\Http\Controllers;


use App\Exceptions\MyException;
use Illuminate\Http\Request;
use App\Models\StdClass;
use Illuminate\Support\Facades\URL;
use Mockery\Exception;
use Termwind\Components\Ul;


//use Illuminate\View\View;
//use Illuminate\Support\Facades\View;


class MainController extends Controller
{
    /**
     * Handle the incoming request.
     */

    //__invoke вызывается когда не задан метод MainController
    public function __invoke(Request $request)
    {
        echo $request->header('Cookie') . '<br>';
        echo $request->method() . '<br>';
        echo $request->isMethod('get') . '<br>';
        echo $request->ip() . '<br>';
        echo $request->path() . '<br>';
        echo $request->url() . '<br>';
        echo $request->fullUrl() . '<br>';
        echo $request->fullUrlWithQuery(['c' => 12]) . '<br>';
        echo '<pre>';
        print_r($request->input());
        echo '</pre>';
        echo '<pre>';
        print_r($request->query());
        echo '</pre>';
//        $a = $request->input('a','not a');
        $a = $request->a;
        echo $a . '<br>';
        if ($request->has('b')) {
            echo 'b - yes <br>';
        } else {
            echo " noo b" . " <br>";
        };
        if ($request->filled('b')) {
            echo 'b - yes <br>';
        } else {
            echo " noo b" . " <br>";
        }


        return '';

    }

    public
    function home()
    {

        return 'home';
    }

    public
    function message($id = null)
    {
        return $id;
    }

    public
    function testview()
    {
//        return view('example', ['a'=> 'hello', 'b'=>2]);
//        return view('example')
//            ->with('a','hi')
//            ->with('b', '23');
        return view('test.example', ['a' => 'hello', 'b' => 2]);
//        return View::make('test.example', ['a' => 1, 'b' => 2]);
//return View::exists('test.example');

    }

    public
    function testblade()
    {
        return view('testblade', ['a' => 'hi', 'b' => '<b>my Comment</b>', 'c' => 2]);
    }

    public
    function extendsView()
    {
        return view('child.index', ['client' => StdClass::add()]);
    }

    public
    function testComponent()
    {
        return view('testComponent', ['a' => 15]);
    }

    public
    function testLayout()
    {
        return view('child.indexlayout');
    }

    public function testResponse()
    {
//        return response('просто строка', 200);
//        return response('просто строка', 200)->header('a',1)->header('Content-Type', 'text/plain');
//        return response()->json(['a'=>5, 'b'=>[1,2,3], 'c'=> true]);
//        return response()->download('index.php');
//        return response()->file('robots.txt');

    }

    public function Request(Request $request)
    {
        return view('request', ['request' => $request]);
    }

    public function Response()
    {
        return view('myRespone');
    }

    public function Download(Request $request)
    {
//        return __DIR__ . '../../../storage/app/2.webp';
//        return response()->file(__DIR__ .'/../../../storage/app/2.webp');
//     echo url()->signedRoute('timeDownload');
//     $url = url()->temporarySignedRoute('timeDownload', now()->addSecond(15));
//            URL::temporarySignedRoute()

//        return redirect($url) ;



    }

    public function timeDownload()
    {

//     return response()->download(storage_path('app/2.webp'));
        return view('download');
//       return 'Успешная активация: ';
    }


    public function testUrl()
    {
        echo url()->current() . '<br>';// текущий урл
//        echo URL::current();
        echo url()->full() . '<br>';//полный урл
        echo url()->previous() . '<br>';// предыдущий урл посещенной страницы
        echo route('user', ['id' => 3]) . '<br>';// урл именнованого маршрунта
        echo route('resp') . '<br>';
        echo url()->signedRoute('activate', ['id' => 1]) . '<br>';// секретная ссылка
        echo url()->temporarySignedRoute('activate', now()->addSecond('15'), ['id' => 1]) . '<br>';// секретная ссылка
        return '';
    }

    public function activate(Request $request)
    {/*
        //проверяет верна ли секретная ссылка
        if ($request->hasValidSignature()) {
            return 'Успешная активация: ' . $request->id;
        }
        abort( 401);
     */

        return 'Успешная активация: ' . $request->id;
    }

    public function counter(Request $request)
    {
//        echo '<pre>';
//        print_r($request->session()->all());
//        echo '</pre>';
        echo '<pre>';
        print_r(session()->all());
        echo '</pre>';
        echo session()->exists('b') . '<br>';// есть ли переменная в сессии
        echo session()->has('b') . '<br>';// есть ли переменная в сессии и отлична от нуля
        session()->put('b', 'eee'); // добавить в сессию
        echo  session()->get('b') . '<br>'; // считать параметр из сессии
        session(['c'=>[1,2,3], 'e'=>[1=>[1,2],2,]]);//добавить в сессию
        session()->push('c', 12); // добавление параметра в массив
//echo  session()->pull('c'); // вернет значение и сразу удаляет
        session()->forget('c'); // удаление



        //счетчик сессии
//        $counter = session()->get('counter', 0);
//        $counter++;
//        session()->put('counter', $counter);
//        return $counter;
//        session()->forget('counter');
        session()->increment('counter');
        return session()->get('counter');

    }

    public function testException()
    {

          throw new MyException();


    }


}
