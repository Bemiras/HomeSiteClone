<?php


namespace App\Providers;
use App\Department;
use Illuminate\Support\ServiceProvider;

class DepartmentDropdown extends ServiceProvider
{
    public function boot()
    {
        view()->composer('*',function($view){
            $view->with('departments_array',Department::all());
        });
    }
}