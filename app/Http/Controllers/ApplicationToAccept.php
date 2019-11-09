<?php

namespace App\Http\Controllers;

use App\ApplicationForChangingData;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class applicationToAccept extends Controller
{
    public function index(){
        $dataToChange = ApplicationForChangingData::all();
        $indexNumer = User::all();
        return view ('ApplicationToAccept',["dataToChange" => $dataToChange, "indexNumer" => $indexNumer]);
    }

    public function acceptEditChange(Request $request, $userId){

            //$userUpdateData = User::findOrFail(Auth::id());
            $userUpdateData = User::where('id', $userId)->first();
            $applicationUpdateData = ApplicationForChangingData::where('user_id', $userId)->first();
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
            $userUpdateData->save();
            $applicationUpdateData->delete();
            return redirect('applicationToAccept');
    }

    public function dismissEditChange(Request $request, $userId){
        $applicationUpdateData = ApplicationForChangingData::where('user_id', $userId)->first();
        $applicationUpdateData->delete();
        return redirect('applicationToAccept');
    }
}
