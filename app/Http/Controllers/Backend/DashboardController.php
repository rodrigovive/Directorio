<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('backend.dashboard');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NatureDependence  $natureDependence
     * @return \Illuminate\Http\Response
     */
    public function show(NatureDependence $natureDependence)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NatureDependence  $natureDependence
     * @return \Illuminate\Http\Response
     */
    public function edit(NatureDependence $natureDependence)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NatureDependence  $natureDependence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NatureDependence $natureDependence)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NatureDependence  $natureDependence
     * @return \Illuminate\Http\Response
     */
    public function destroy(NatureDependence $natureDependence)
    {
        //
    }

}
