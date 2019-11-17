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
        $userData = User::all();
        return view ('ApplicationToAccept',["dataToChange" => $dataToChange, "userData" => $userData]);
    }

    public function acceptEditChange(Request $request, $userId){

            $userUpdateData = User::where('id', $userId)->first();
            $applicationUpdateData = ApplicationForChangingData::where('user_id', $userId)->first();


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
