<?php

namespace App\Repositories;

use App\Department;

class DepartmentRepository {

    public function __construct(Department $model)
    {
        $this->model = $model;
    }

    public function getAllDepartment(){
        return $this->model->orderBy('name','asc')->get();
    }
}