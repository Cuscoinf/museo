<?php

namespace App\Http\Controllers;

use App\Models\nombreEspecimen;
use Illuminate\Http\Request;

class NombreEspecimenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return View('registroEspecimen.nombres');
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
        $nombreEspecimen = new nombreEspecimen();
        $nombreEspecimen->especie = $request->especie;
        $nombreEspecimen->nombres = $request->nombres;

        if($nombreEspecimen->save())
        {
           return "1" ;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\nombreEspecimen  $nombreEspecimen
     * @return \Illuminate\Http\Response
     */
    public function show(nombreEspecimen $nombreEspecimen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\nombreEspecimen  $nombreEspecimen
     * @return \Illuminate\Http\Response
     */
    public function edit(nombreEspecimen $nombreEspecimen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\nombreEspecimen  $nombreEspecimen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, nombreEspecimen $nombreEspecimen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\nombreEspecimen  $nombreEspecimen
     * @return \Illuminate\Http\Response
     */
    public function destroy(nombreEspecimen $nombreEspecimen)
    {
        //
    }
}
