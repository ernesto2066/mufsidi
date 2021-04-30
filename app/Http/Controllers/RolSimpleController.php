<?php

namespace App\Http\Controllers;

use App\RolSimple;
use Illuminate\Http\Request;

class RolSimpleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('rolSimple.create');
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
     * @param  \App\RolSimple  $rolSimple
     * @return \Illuminate\Http\Response
     */
    public function show(RolSimple $rolSimple)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RolSimple  $rolSimple
     * @return \Illuminate\Http\Response
     */
    public function edit(RolSimple $rolSimple)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RolSimple  $rolSimple
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RolSimple $rolSimple)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RolSimple  $rolSimple
     * @return \Illuminate\Http\Response
     */
    public function destroy(RolSimple $rolSimple)
    {
        //
    }
}
