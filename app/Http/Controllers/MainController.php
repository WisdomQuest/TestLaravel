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
        //
    }

    public function home()
    {

        return 'home';
    }

    public function message($id = null)
    {
        return $id;
    }

    public function testview()
    {
//        return view('example', ['a'=> 'hello', 'b'=>2]);
//        return view('example')
//            ->with('a','hi')
//            ->with('b', '23');
        return view('test.example', ['a' => 'hello', 'b' => 2]);
//        return View::make('test.example', ['a' => 1, 'b' => 2]);
//return View::exists('test.example');

    }

    public function testblade()
    {
        return view('testblade', ['a' => 'hi', 'b' => '<b>my Comment</b>', 'c' => 2]);
    }

    public function extendsView()
    {
        return view('child.index', ['client' => StdClass::add()]);
    }

    public function testComponent()
    {
        return view('testComponent', ['a' => 15]);
    }

}
