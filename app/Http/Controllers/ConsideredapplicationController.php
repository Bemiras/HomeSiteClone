<?php


namespace App\Http\Controllers;

use App\User;
use App\Card;
use App\Department;
use Request;
use App\Repositories\UserRepository;
use App\Repositories\CardRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class ConsideredapplicationController
{
    public function index(){

    $users = DB::table('Cards')
            ->join('Users', function ($join) {
            $join->on('Users.id_card', '=', 'Cards.id');
            })
            ->get();

        return view('worker.consideredapplication',["userlist"=>$users]);
    }
}