<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index');

Route::get('/student', 'StudentController@index');

Route::get('/worker', 'WorkerController@index');

Route::get('/admin', 'AdminController@index');

Route::get('/about', 'AboutController@index');

Route::get('/card', 'CardController@index');

Route::get('/message', 'MessageController@index');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
