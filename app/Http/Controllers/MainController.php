<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StdClass;

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
        return view('request');
    }

}
