<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Models\User;

class StudentController extends Controller
{



    public function index(){



        return view('student.createstudent');
    }
}
