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
        $nombresCientificos = nombreEspecimen::all();
        return View('registroEspecimen.nombres',[
            "nombresCientificos" => $nombresCientificos
        ]);
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
        $nombreEspecimen->nombreCientifico = $request->nombreCientifico;
        $nombreEspecimen->autor = $request->autor;
        $nombreEspecimen->familia = $request->familia;
        $nombreEspecimen->clase = $request->clase;
        $nombreEspecimen->nombreComunEsp = $request->nombreComunEsp;
        $nombreEspecimen->nombreComunEng = $request->nombreComunEng;
        $nombreEspecimen->anioColecta = $request->anioColecta;
        $nombreEspecimen->fuente = $request->fuente;

        if($nombreEspecimen->save())
        {
           return redirect()->route("nombreEspecimen");
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
    public function destroy($id)
    {
        $nombreEspecimen = nombreEspecimen::findOrFail($id);
        $nombreEspecimen->delete();
        return redirect()->route('nombreEspecimen');
    }
}
