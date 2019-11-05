<?php


namespace App\Http\Controllers;


use App\Commission;
use App\Repositories\UserRepository;
use App\User;

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

}