<?php

namespace App\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

//use Illuminate\View\View;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::share('global_var', 'global_data');
//        View::composer('test.example', function ($view) {
////            $view->with('composer_data', 'hello');
//        });
        View::composer(['test.example', 'myPage', 'mypageblade'], \App\View\Composers\ExampleComposer::class);

        Blade::directive('importantMessage', function ($param): string {
            return "<?php echo '<b>$param</b>';?>";
        });


        Blade::directive('currency', function ($currency) {
            $price = 600;
            if ($currency === 'rub') {
                return "<?php echo $price . 'руб'?>";
            } elseif ($currency === 'usd') {
                return "<?php echo '$' . $price  ?>";
            } else {
                return $price . 'Нет у нас таких валют';
            }
        });
    }
}
