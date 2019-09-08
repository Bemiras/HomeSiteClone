<?php


namespace App\Http\Controllers;


class NewsController
{
    public function index(){
        return view('admin.news');
    }
}