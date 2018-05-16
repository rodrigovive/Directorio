<?php

namespace App\Http\Controllers\Backend\Manager;

use Validator;
use App\Models\Manager;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $managers = Manager::all();
        return view('backend.personal.index',compact('managers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $dataResponse = [
            'name' => $request->name,
            'lastname' => $request->lastname,
            'phone' => $request->phone,
            'cellphone' => $request->cellphone,
            'email' => $request->email,
            'dni' => $request->dni,
            'occupation_id' => $request->occupation,
            'dependence_id' => $request->dependence,
        ];
        $rules = [
            'name' => 'required|max:255',
            'lastname' => 'required|max:255',
            'dni' => 'required|unique:managers|max:8',
        ];
        $messages = [
            'name'    => 'El nombre no esta completado.',
            'lastname' => 'Apellido no completado',
            'dni' => 'DNI no completado o ya inscrito'
        ];
        $validator = Validator::make($dataResponse, $rules, $messages);

        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors(),'data' => $dataResponse]);
        }
        $managerCreated = Manager::create($dataResponse);

        if($managerCreated){
            return response()->json(["success" => "Registro del personal exitosa"]);
        } else {
            return response()->json(["error" => "Error ocurrido al guardar ", "err" => $managerCreated]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function show(Manager $manager)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function edit(Manager $manager)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Manager $manager)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manager $manager)
    {
        //
    }

}
