<?php

namespace App\Http\Controllers\Backend\Dependence;

use Validator;
use App\Models\CategoryDependence;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CategoryDependenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categoryDependence = CategoryDependence::all();
        return view('backend.types.index',compact('categoryDependence'));
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
        ];
        $rules = [
            'name' => 'required|max:255',
        ];
        $messages = [
            'name'    => 'El nombre no esta completado.',
        ];
        $validator = Validator::make($dataResponse, $rules, $messages);

        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()]);
        }
        $dependenceCategoryCreated = CategoryDependence::create($dataResponse);

        if($dependenceCategoryCreated){
            return response()->json(["success" => "Registro de la dependencia exitosa"]);
        } else {
            return response()->json(["error" => "Error ocurrido al guardar ", "err" => $dependenceCategoryCreated]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CategoryDependence  $categoryDependence
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryDependence $categoryDependence)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CategoryDependence  $categoryDependence
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryDependence $categoryDependence)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CategoryDependence  $categoryDependence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryDependence $categoryDependence)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CategoryDependence  $categoryDependence
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryDependence $categoryDependence)
    {
        //
    }
}
