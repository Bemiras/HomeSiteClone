<?php


namespace App\Http\Controllers;


use App\Commission;
use App\Repositories\UserRepository;
use App\User;
use Illuminate\Http\Request;

class UserroleController
{
    public function index(){
        $workers = User::all()
            ->where("role","pracownik")
            ->sortBy('id');

        return view('admin.userrole',["workerlist"=>$workers]);
    }
    public function edit($id, UserRepository $userRepo){
        $workers  = User::find($id);
        return view('admin.editrole', ['workers'=>$workers]);
    }

    public function update()
    {
        $worker  = User::find(Request::input('id'));
        $worker->specialization =  Request::input('specialization');
        $worker->save();
        return redirect()->action('UserroleController@index');
    }

    public function showRegistrations(){
        return view('admin.employeeRegistrations');
    }

    public function regiserEmployee(Request $request){
        $data = new User();

        $data->name = $request->input('name');
        $data->lastname = $request->input('lastname');
        $data->email = $request -> input('email');
        $data->id = $request -> input('id');
        $data->department = $request->input('department');
        $data->password = bcrypt($request -> input('password'));
        $data->role = 'pracownik';
        $data->save();

        return redirect('userrole');
    }

}