<?php


namespace App\Http\Controllers;


class UserlistController
{
    public function index(){
        return view('admin.userlist');
    }
}