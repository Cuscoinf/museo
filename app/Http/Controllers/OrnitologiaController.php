<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ornitologia;


class OrnitologiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $registro = ornitologia::create([
            'taxonomia'     =>  $request->taxonomia,
            'especie'       =>  $request->especie,
            'nombreComun'   =>  $request->nombreComun,
            'Genero'        =>  $request->Genero,
            'Familia'       =>  $request->Familia,
            'Orden'         =>  $request->Orden,
            'Clase'         =>  $request->Clase,

            'tipoCaptura'   =>  $request->tipoCaptura,
            'codigoMHNC'    =>  $request->codigoMHNC,
            'codCampo'      =>  $request->codCampo,
            'proyecto'      =>  $request->proyecto,
            'sexo'          =>  $request->sexo,
            'tejidoADN'     =>  $request->tejidoADN,
            'preservacion'  =>  $request->preservacion,
            'colector'      =>  $request->colector,
            'autor'         =>  $request->autor,
            'observacion'   =>  $request->observacion,
            'foto'          =>  $request->foto,

            'pais'          =>  $request->pais,
            'provincia'     =>  $request->provincia,
            'departamento'  =>  $request->departamento,
            'localidad'     =>  $request->localidad,
            'distrito'      =>  $request->distrito,
            'fechaColecta'  =>  $request->fechaColecta,
            'mapLatitud'    =>  $request->mapLatitud,
            'mapLongitud'   =>  $request->mapLongitud
        ]);

        return View('registroEspecimen.index');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
