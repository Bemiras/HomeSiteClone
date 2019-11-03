<?php


namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;

use App\Models\Specialization;

use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;

use Illuminate\Routing\Controller as BaseController;

class DataChangeRequestApi extends Controller
{
    public function index(UserRepository $userRepo)
    {
        $statistics = $userRepo->getAllWorkers();

        $users = $userRepo->getAllWorkers();

        return $users->toJson();
    }
}