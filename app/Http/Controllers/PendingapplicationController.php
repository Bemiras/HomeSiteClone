<?php


namespace App\Http\Controllers;

use App\User;
use App\Card;
use App\Department;
use App\Direction;
use Request;
use App\Repositories\UserRepository;
use App\Repositories\CardRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PendingapplicationController
{
    public function index(){

            $users = DB::table('Cards')
            ->join('Users', function ($join) {
            $join->on('Users.id_card', '=', 'Cards.id');
            })
            ->get();

        return view('worker.pendingapplication',["userlist"=>$users]);
    }

    public function updateYesDeanery($id)
    {
        DB::table('Cards')
            ->where('id', $id)
            ->update(['deanery' => 'Zakonczona']);

        return redirect()->action('PendingapplicationController@index');
    }
    
    public function updateYesLiblary($id)
    {
        DB::table('Cards')
            ->where('id', $id)
            ->update(['liblary' => 'Zakonczona']);

        return redirect()->action('PendingapplicationController@index');
    }

    public function updateYesDormitory($id)
    {
        DB::table('Cards')
            ->where('id', $id)
            ->update(['dormitory' => 'Zakonczona']);

        return redirect()->action('PendingapplicationController@index');
    }
    
    public function updateNoDeanery($id)
    {
            DB::table('Cards')
            ->where('id', $id)
            ->update(['deanery' => 'Niepowodzenie',  
                     'commente' => Request('commente')]);

        return redirect()->action('PendingapplicationController@index');
    }


     public function updateNoLiblary($id)
    {
            DB::table('Cards')
            ->where('id', $id)
            ->update(['liblary' => 'Niepowodzenie']);

        return redirect()->action('PendingapplicationController@index');
    }

     public function updateNoDormitory($id)
    {
        DB::table('Cards')
            ->where('id', $id)
            ->update(['dormitory' => 'Niepowodzenie']);

        return redirect()->action('PendingapplicationController@index');
    }

    public function updateYesCard($id)
    {
            DB::table('Users')
            ->where('id', $id)
            ->update(['card' => 'W realizacji']);

        return redirect()->action('PendingapplicationController@index');
    }

     public function updateNoCard($id)
    {
        DB::table('Users')
            ->where('id', $id)
            ->update(['card' => 'Bledne dane']);
            
        DB::table('Cards')
            ->where('id', $id)
            ->delete();

        return redirect()->action('PendingapplicationController@index');
    }
}