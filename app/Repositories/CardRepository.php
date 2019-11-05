<?php

namespace App\Repositories;

use App\Card;

class CardRepository {

    public function __construct(Card $model)
    {
        $this->model = $model;
    }

    public function getAllCards(){
        return $this->model->orderBy('id','asc')->get();
    }
}