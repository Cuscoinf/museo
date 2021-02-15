<?php

namespace App\Http\Controllers;

use App\Models\Especimen;
use Illuminate\Http\Request;

class EspecimenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return View('registroEspecimen.index');
    }
    //ornitologia
    public function ornitologia()
    {
        return View('registroEspecimen.ornitologia');
    }
    //maztozoologia
    public function maztozoologia()
    {
        return View('registroEspecimen.maztozoologia');
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function listarEspecimen($area)
    {
        return $area;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Especimen  $especimen
     * @return \Illuminate\Http\Response
     */
    public function show(Especimen $especimen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Especimen  $especimen
     * @return \Illuminate\Http\Response
     */
    public function edit(Especimen $especimen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Especimen  $especimen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Especimen $especimen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Especimen  $especimen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Especimen $especimen)
    {
        //
    }
}
