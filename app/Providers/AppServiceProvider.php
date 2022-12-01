<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // view()->composer(['menu.menu_son', 'menu.menu'], function ($view) {
        //     $view->with('menu', Task::all());
        // });

        // view()->share('', '');

        {
            //全域的視圖共用$something這個變數ShareToAll的值
            view()->share('something', 'ShareToAll');

            //陣列內視圖指定變數的參數共用
            view()->composer(['test._test'], function ($f2) {$f2->with('something2', '陣列指定');});

            //指定資料夾
            view()->composer(['test._test'], function ($something3) {$something3->with('something3', '資料夾指定');});

            //同變數指定多次, 會應用最後的值

        }

    }

}