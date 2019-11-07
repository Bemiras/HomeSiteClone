<?php

namespace App\Http\Controllers;

use App\ApplicationForChangingData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;
class DataChangeRequestsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $dataToChange = ApplicationForChangingData::where('user_id',Auth::user()->id)->get();

        //$dataToChange = ApplicationForChangingData::all();
        var_dump($dataToChange);
        return view ('dataChangeRequests', ["isDataToChangeExist" => $dataToChange]);
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

    public function sendApplicationForChangingData(Request $request){
        //return redirect('dataChangeRequests');
        return "echo xD";
    }

    public function applicationForChangeData(){

    }

}
