<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Tour;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        view()->share('tours', Tour::orderBy('id', 'desc')
                ->paginate(12));
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
