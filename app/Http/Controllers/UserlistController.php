<?php


namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;
use App\Repositories\UserRepository;



class UserlistController
{
    public function index(){

        $users = User::all()->sortBy('id');


        return view('admin.userlist',["userlist"=>$users]);
    }


}