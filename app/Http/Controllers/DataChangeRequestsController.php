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
        return view ('dataChangeRequests', ["isDataToChangeExist" => $dataToChange]);
    }
    public function sendApplicationForChangingData(Request $request){
        $dataToStore = new ApplicationForChangingData;

        $dataToStore->user_id = Auth::user()->id;
        $dataToStore->name = $request->input('name');
        $dataToStore->lastname = $request->input('lastname');
        $dataToStore->typestudy = $request->input('typestudy');
        $dataToStore->levelstudy = $request->input('levelstudy');
        $dataToStore->department = $request->input('department');
        $dataToStore->direction = $request->input('direction');
        $dataToStore->specialization = $request->input('specialization');
        $dataToStore->save();
        return redirect('dataChangeRequests');
    }

    public function acceptEditChange(Request $request){
        $userUpdateData = User::findOrFail(Auth::id());
        $applicationUpdateData = ApplicationForChangingData::where('user_id',Auth::user()->id)->first();
        //var_dump(ApplicationForChangingData::where('user_id',Auth::user()->id));
        //$user = ApplicationForChangingData::where('user_id',Auth::user()->id);

        $userUpdateData->fill([
            'name' => $applicationUpdateData->name,
            'lastname' => $applicationUpdateData->lastname,
            'typestudy' => $applicationUpdateData->typestudy,
            'levelstudy' => $applicationUpdateData->levelstudy,
            'department' => $applicationUpdateData->department,
            'direction' => $applicationUpdateData->direction,
            'specialization' => $applicationUpdateData->specialization
        ]);
        $userUpdateData -> save();
        $applicationUpdateData->delete();

        return redirect('dataChangeRequests');
    }

    public function update(array $data)
    {
        //var_dump($data);
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

}
