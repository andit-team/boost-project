<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Helpers\Boost;

class BoostServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Boost',function (){
            return new Boost();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
