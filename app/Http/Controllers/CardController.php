<?php


namespace App\Http\Controllers;

use App\Card;
use App\User;
use Request;
use App\Repositories\CardRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class CardController extends Controller
{
    public function index(){

            $card = DB::table('Users')
            ->join('Cards', function ($join) {
            $join->on('Users.id_card', '=', 'Cards.id')
                 ->where('Users.id_card', '=', Auth::user()->id_card);
            })
            ->get();

            return view('student.card',["cardlist"=>$card]);

    }

    public function store(){
        
        DB::table('Cards')->insert(
        ['liblary' => 'W trakcie',
         'dormitory' => 'W trakcie',
         'deanery' => 'W trakcie',
         'commission_id' => Request('number_commission')
        ]);

        $card = DB::table('Cards')->max('id');

        DB::table('Users')
            ->where('id', (Auth::user()->id))
            ->update(['id_card' =>$card,
                      'card' => 'Rozpatrzenie']);

        return redirect()->action('CardController@index');
    }

    
}    
