<?php

namespace App\Providers;
use App\Direction;
use Illuminate\Support\ServiceProvider;

class DirectionDropdown extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*',function($view){
            $view->with('directions_array',Direction::all());
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
