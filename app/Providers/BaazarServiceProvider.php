<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Helpers\Baazar;

class BaazarServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Baazar',function (){
            return new Baazar();
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
