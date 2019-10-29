<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commission extends Model
{
    protected $fillable = [
        'number_commision','role_commission','usernumber_commission',
    ];




    public function usercommission(){
        return $this->belongsTo(User::class,'usernumber_commission');

    }



}


