<?php

namespace App\Http\Controllers\Frontend\Dependence;

use App\Models\Dependence;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DependenceController extends Controller
{
    //
    public function dependenceAjax(){
        return Datatables::eloquent(User::query())->make(true);
    }
}
