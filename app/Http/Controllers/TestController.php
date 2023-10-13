<?php

namespace App\Http\Controllers;

use App\Exceptions\Client;
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
    public function testComponent()
    {
        return view('child.indexmypage',['client' => StdClass::add()]);
    }

    public function mylayout()
    {
//        if ($_GET['func' ==='add'] ) {
//            throw new Client();
//        }
        if(isset($_GET['func']) &&($_GET['func'] == 'add')){
            throw new Client();
    }
        return 1;
    }

}
