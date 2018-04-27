<?php

namespace App\Http\Controllers\Backend\Dependence;
use Validator;
use App\Models\Dependence;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DependenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('backend.dependences.index');
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
/*        $validatedData = $request->validate([
            'name' => 'required|unique:name|max:255',
            'acronym' => 'required|unique:acronym|max:255',
        ]);*/

        $dataResponse = [
            'name' => $request->name,
            'acronym' => $request->acronym,
            'nature_id' => $request->nature,
            'phone' => $request->phone,
            'annex' => $request->annex,
            'description' => $request->description,
            'email' => $request->email,
            'dependence' => $request->dependence,
            'category_id' => $request->category,
            'level_id' => $request->level,
            'code_dependence' => $request->code_dependence,
        ];
        $rules = [
            'name' => 'required|max:255',
            'acronym' => 'required|max:40',
        ];
        $messages = [
            'name'    => 'El nombre no esta completado.',
            'acronym'    => 'El acronimo de la dependencia no esta completado.',
        ];
        $validator = Validator::make($dataResponse, $rules, $messages);

        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()]);
        }
        $dependenceCreated = Dependence::create($dataResponse);

        if($dependenceCreated){
            return response()->json(["success" => "Registro de la dependencia exitosa"]);
        } else {
            return response()->json(["error" => "Error ocurrido al guardar ", "err" => $dependenceCreated]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dependence  $dependence
     * @return \Illuminate\Http\Response
     */
    public function show(Dependence $dependence)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dependence  $dependence
     * @return \Illuminate\Http\Response
     */
    public function edit(Dependence $dependence)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dependence  $dependence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dependence $dependence)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dependence  $dependence
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dependence $dependence)
    {
        //
    }
}
