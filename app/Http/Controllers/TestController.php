<?php

namespace App\Http\Controllers;

use App\Exceptions\Client;
use Illuminate\Http\Request;
use App\Models\StdClass;
use App\Models\TestJson;
use Illuminate\Support\Facades\Log;

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

    public function myClient(Request $request)
    {
        Log::channel('mychannel')->debug(implode([$request->ip(), ',', now()->addHour(4), ',', url()->current()]));
//        Log::debug(session()->databasePath());
//        Log::channel('mychannel')->debug();
        return view('myClient', ['client' => StdClass::add()]);
    }

    public function contacts(Request $request)
    {
        Log::channel('mychannel')->debug(implode([$request->ip(), ',', now()->addHour(4), ',', url()->current()]));
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
