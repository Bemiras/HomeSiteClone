<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApplicationForChangingData extends Model
{
    protected $fillable = [
        'user_id','name','lastname','typestudy','levelstudy','department','direction','specialization',
    ];

//    public function usercommission(){
//        User::all()->get();
//        return $this->belongsTo(User::class,'user_id');
//    }

}
