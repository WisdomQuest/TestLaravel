<?php

namespace App\Exceptions;

use App\Http\Controllers\MainController;
use Exception;

class Client extends Exception
{
    public function context()
    {
        return ['data'=> 'тут инфа ошибки'];
    }

    public function render()
    {
        return view('TestJson');
    }

}
