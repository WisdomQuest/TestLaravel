<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\View\Component;

class MyRequest extends Component
{
    /**
     * Create a new component instance.
     */
    public $ip;
    public function __construct($ip,Request $request)
    {
        return $this->ip = $request->ip();
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.my-request');
    }

//    public function getIp(Request $request): ?string
//    {
//        return $this->ip =$request->ip() ;
//    }
}

$object = new MyRequest();
