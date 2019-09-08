<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class AboutController extends Controller
{
    public function index()
    {
        $user = User::all();

        return view('about',["user"=>$user]);
    }
}
