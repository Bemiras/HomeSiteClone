<?php


namespace App\Http\Controllers;

use App\Commission;
use Illuminate\Support\Facades\DB;
use Request;
use App\Repositories\UserRepository;

class CommissionsController
{
    public function index(){

        $users = Commission::all()->sortBy('number_commission');


        return view('admin.commissions',["userlist"=>$users]);
    }

    public function create(UserRepository $userRepo){
        $workers = $userRepo->getAllWorkers();
        $commission = DB::table('Commissions')
            ->get();

        return view('admin.createcommission',["workers"=>$workers, "commissions"=>$commission]);
    }

    public function edit($id, UserRepository $userRepo){
        $commission  = Commission::find($id);
        $workers = $userRepo->getAllWorkers();
        return view('admin.editcommissionuser', ['commission' => $commission,'workers'=>$workers]);
    }

    public function destroy($id){
        $commission  = Commission::find($id);
        $commission->delete();
        return redirect()->action('CommissionsController@index');
    }

    public function store()
    {
        $commission = new Commission;
        $commission->number_commission =  Request('number_commission');
        $commission->role_commission =  Request('role');
        $commission->usernumber_commission =  Request('worker');
        $commission->name =  Request('name');
        $commission->save();
        return redirect()->action('CommissionsController@index');
    }

    public function update()
    {
        $commission  = Commission::find(Request::input('id'));
        $commission->number_commission =  Request::input('number_commission');
        $commission->role_commission =  Request::input('role');
        $commission->usernumber_commission = Request('worker');
        $commission->name = Request('name');
        $commission->save();
        return redirect()->action('CommissionsController@index');
    }


}

