<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Dependence;


class IndexController extends Controller
{
    //
    public function index(){

        $dependences = Dependence::all();
        return view('frontend.dependences.dependence',compact('dependences'));
    }


}
