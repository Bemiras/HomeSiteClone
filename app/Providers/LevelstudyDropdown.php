<?php

namespace App\Providers;

use App\Levelstudy;
use Illuminate\Support\ServiceProvider;

class LevelstudyDropdown extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*',function($view){
            $view->with('levelsstudy_array',Levelstudy::all());
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
