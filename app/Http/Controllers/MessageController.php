<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;

class MessageController
{
    public function index(){
        if(!Auth::check())
            return redirect('/login');
        else{
        return view('message');
        }
    }
}