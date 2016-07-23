<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        //  View::composer('*', function ($view) {
        //       $tourlink = Tour::where('latin', $link)->first();
         //
        //    $view->with('tourlink', $tourlink);
         //
        //   });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
