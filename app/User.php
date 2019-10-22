<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','name','lastname','typestudy','levelstudy','department','direction', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function aboutdepartment(){
        return $this->belongsTo(Department::class, 'id');
    }

    public function aboutdirection(){
        return $this->belongsTo(Direction::class, 'id');
    }

    public function aboutlevelstudy(){
        return $this->belongsTo(Levelstudy::class, 'id');
    }

    public function abouttypestudy(){
        return $this->belongsTo(Typestudy::class, 'id');
    }
}
