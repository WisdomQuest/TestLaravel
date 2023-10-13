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
public $param;

    public function __construct()
    {

    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.my-request',);
    }

    /**
     * @return mixed
     */
    public function getParam()
    {
        return $this->param;
    }

    /**
     * @param mixed $param
     */
    public function setParam($param): void
    {
        $this->param = $param;
    }

    /**
     * @return mixed
     */

   public static function add()
    {
//        $param =[];
//            $paramObject =new MyRequest;
//        $paramObject->setParam(
//
//        );
       return 1;
    }

}





