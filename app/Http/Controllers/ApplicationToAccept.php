<?php

namespace App\Http\Controllers;

use App\ApplicationForChangingData;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class applicationToAccept extends Controller
{
    public function index(){
        if(!Auth::check())
            return redirect('/login');
        else {
                $dataBase = DB::table('application_for_changing_datas')
                    ->join('departments', 'departments.id', '=', 'application_for_changing_datas.department')
                    ->join('users', 'users.id', '=', 'application_for_changing_datas.user_id')
                    ->join('departments AS d', 'd.id', '=', 'users.department')
                    ->select('application_for_changing_datas.*', 'departments.name AS name_department', 'users.direction AS name_direction',
                        'users.id AS id_user_users', 'users.name AS old_name', 'users.lastname AS old_lastname', 'users.typestudy AS old_typestudy',
                        'users.levelstudy AS old_levelstudy', 'd.name AS old_department', 'users.direction AS old_direction',
                        'users.specialization AS old_specialization', 'users.role AS role','users.email AS old_email')
                    ->get();

                return view('ApplicationToAccept', ["dataBase" => $dataBase]);

        }
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
