<?php

namespace App\Http\Controllers\Frontend\Manager;

use App\Http\Controllers\Controller;
use App\Models\Manager;

class ManagerController extends Controller
{
    //
    public function ManagerApi()
    {

        $managers = Manager::all();

        return response()->json($managers);
    }
}
