<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StdClass;
use App\Models\TestJson;

class TestController extends Controller
{
    public function Test()
    {

        return view('myPage', ['client' => StdClass::add()]);
    }

    public function mypageblade()
    {
        return view('mypageblade' , ['client' => StdClass::add()]);
    }

    public function TestJson()
    {
        return view('TestJson', ['example' => TestJson::add()]);
    }

    public function myClient()
    {
        return view('myClient', ['client' => StdClass::add()]);
    }

    public function contacts()
    {
        return view('contacts');
    }

}
