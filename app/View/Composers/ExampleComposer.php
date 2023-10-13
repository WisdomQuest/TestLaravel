<?php

namespace App\View\Composers;

use Illuminate\View\View;

class ExampleComposer
{
    public function compose(View $view)
    {
        $view->with('composer_data', 'ExampleComposer');
        $view->with('numberProduct', 99);
        $view->with('totalSum', 'сумма');

    }
}
