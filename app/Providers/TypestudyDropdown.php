<?php

namespace App\Providers;

use App\Typestudy;
use Illuminate\Support\ServiceProvider;

class TypestudyDropdown extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*',function($view){
            $view->with('typesstudy_array',Typestudy::all());
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
