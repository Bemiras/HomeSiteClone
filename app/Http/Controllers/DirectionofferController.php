<?php


namespace App\Http\Controllers;

use App\Direction;
use Request;
use App\Repositories\DirectionRepository;


class DirectionofferController
{
    public function index(){

        $users = Direction::all()->sortBy('id');

        return view('admin.directionoffer',["userlist"=>$users]);
    }

    public function store()
    {
        $directionoffer = new Direction;
        $directionoffer->id =  Request('id');
        $directionoffer->name =  Request('name');
        $directionoffer->save();
        return redirect()->action('DirectionofferController@index');
    }

    public function create(DirectionRepository $directionRepo){
        $direction = $directionRepo->getAllDirection();

        return view('admin.createdirection',["direction"=>$direction]);
    }

    public function edit($id, DirectionRepository $directionRepo){
        $direction  = Direction::find($id);
        $workers = $directionRepo->getAllDirection();
        return view('admin.editdirection', ['direction' => $direction]);
    }

    public function destroy($id){
        $direction  = Direction::find($id);
        $direction->delete();
        return redirect()->action('DirectionofferController@index');
        }
    
    public function update(){
        $direction  = Direction::find(Request::input('id'));
        $direction->id =  Request::input('id');
        $direction->name =  Request::input('name');
        $direction->save();
        return redirect()->action('DirectionofferController@index');
    }
}