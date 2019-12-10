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

    }

    public function acceptStudents(){
        if(!Auth::check())
            return redirect('/login');
        else {
                $dataBase = DB::table('application_for_changing_datas')
                    ->join('departments', 'departments.id', '=', 'application_for_changing_datas.department')
                    ->join('directions', 'directions.id', '=', 'application_for_changing_datas.direction')
                    ->join('users', 'users.id', '=', 'application_for_changing_datas.user_id')
                    ->join('departments AS d', 'd.id', '=', 'users.department')
                    ->join('directions AS di', 'di.id', '=', 'users.direction')
                    ->select('application_for_changing_datas.*', 'departments.name AS name_department', 'directions.name AS name_direction',
                        'users.id AS id_user_users', 'users.name AS old_name', 'users.lastname AS old_lastname', 'users.typestudy AS old_typestudy',
                        'users.levelstudy AS old_levelstudy', 'd.name AS old_department', 'di.name AS old_direction',
                        'users.specialization AS old_specialization', 'users.role AS role', 'users.email AS old_email')
                    ->get();
                return view('ApplicationToAcceptStudents', ["dataBase" => $dataBase]);
            }
        }


    public function acceptWorkers(){
        if(!Auth::check())
            return redirect('/login');
        else {
            //$applicationForChangingData = ApplicationForChangingData::where()
            //var_dump($applicationForChangingData);
                $dataBase = DB::table('application_for_changing_datas')
                    ->join('departments', 'departments.id', '=', 'application_for_changing_datas.department')
                    ->join('users', 'users.id', '=', 'application_for_changing_datas.user_id')
                    ->join('departments AS d', 'd.id', '=', 'users.department')
                    ->select('application_for_changing_datas.*', 'departments.name AS name_department','application_for_changing_datas.direction AS name_direction',
                        'users.id AS id_user_users', 'users.name AS old_name', 'users.lastname AS old_lastname', 'users.typestudy AS old_typestudy',
                        'users.levelstudy AS old_levelstudy', 'd.name AS old_department', 'd.name As old_direction',
                        'users.specialization AS old_specialization', 'users.role AS role', 'users.email AS old_email')
                    ->where('role','pracownik')->get();
                return view('ApplicationToAcceptWorkers', ["dataBase" => $dataBase]);

            }
    }

    public function acceptEditChange(Request $request, $userId){
        var_dump($userId);
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
        //return redirect('applicationToAccept');
        return redirect()->back();
    }

    public function dismissEditChange(Request $request, $userId){
        var_dump($userId);
        $applicationUpdateData = ApplicationForChangingData::where('user_id', $userId)->first();
        $applicationUpdateData->delete();
        return redirect()->back();
    }
}
