<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'name',
    ];


    protected $table = 'departments';

    public function aboutdepartmentss(){
        return $this->HasMany(User::class);}
}
