<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataChangeRequestsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

        return view ('dataChangeRequests');
    }

    public function update(array $data)
    {
        var_dump($data);
        $arrayOfData = array(
            'name' => 'Bartek',
            'nazwisko' => 'Flis',
            'adresEmail' => 'Bartek.Flis@Test.pl'
        );

        //check if record exist
        if(DB::table('users')->where('id',\Auth::user()->id )->first()){
            $users = DB::table('users')->where('id',\Auth::user()->id )->update(['name'=>$arrayOfData['name'], 'lastname'=>$arrayOfData['nazwisko'], 'email'=>$arrayOfData['adresEmail']]);
        }
        //echo $users[0]->lastname;
//        foreach ($users as $user) {
//            echo $user->name. "<br>";
//        }
    }

    public function applicationForChangeData(){
    //echo 'dupa';
    }
}
