<?php

namespace App\Repositories;

use App\Direction;

class DirectionRepository {

    public function __construct(Direction $model)
    {
        $this->model = $model;
    }

    public function getAllDirection(){
        return $this->model->orderBy('name','asc')->get();
    }
}