<?php


namespace App\Http\Controllers;

use App\Message;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MessageController
{
    public function index(){
        if(!Auth::check())
            return redirect('/login');
        else{
        return view('message');
        }
    }

    public function newMessage ($id, UserRepository $userRepo)
    {

        $worker = $userRepo->getAllWorkers();
        $user = DB::table('users')
            ->where("users.id","$id")
            ->select('users.*','users.name AS student_name','users.lastname AS student_lastname', 'users.id AS student_id')
            ->get();

        return view('newmessage',['userlist' => $user,'workers'=>$worker]);
    }
    public function sendMessage($id,Request $request)
    {
        $message = new  Message;
        $message->sender =  $request->input('sender');
        $message->recipient =  $request->input($id);
        $message->message =  $request->input('message');
        $message->save();
        return redirect()->action('MessageController@index');

    }
}