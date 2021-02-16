<?php

namespace App\Http\Controllers;

use App\Models\Especimen;
use App\Models\ornitologia;
use App\Models\Maztozoologia;
use App\Models\Herpetologia;
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
     * carga de data a herpetologia
     */
    public function storeHerpetologia(Request $request)
    {
        $especimen = new Herpetologia();
        $especimen->codigo = $request->codigo;
        $especimen->orden = $request->orden;
        $especimen->familia = $request->familia;
        $especimen->genero = $request->genero;
        $especimen->clase = $request->clase;
        $especimen->especie = $request->especie;
        $especimen->campo = $request->campo;
        $especimen->proyecto = $request->proyecto;
        $especimen->foto = $request->foto;
        $especimen->fechaColecta = $request->fechaColecta;
        $especimen->pais = $request->pais;
        $especimen->departamento = $request->departamento;
        $especimen->provincia = $request->provincia;
        $especimen->distrito = $request->distrito;
        $especimen->localidad = $request->localidad;
        $especimen->coordenadaA = $request->coordenadaA;
        $especimen->coordenadaB = $request->coordenadaB;
        $especimen->colector = $request->colector;
        $especimen->autor = $request->autor;
        $especimen->sexo = $request->sexo;
        $especimen->preservacion = $request->preservacion;
        $especimen->tejidoAdn = $request->tejidoAdn;
        $especimen->tejidoCod = $request->tejidoCod;
        $especimen->observacion = $request->observacion;
        if($especimen->save())
        {
            return "1";
        }
        else{
            return "0";
        }
    }

    /**
     * carga de data a ornitologia
     */
    public function storeOrnitologia(Request $request)
    {
        $especimen = new ornitologia();
        $especimen->codigo = $request->codigo;
        $especimen->orden = $request->orden;
        $especimen->familia = $request->familia;
        $especimen->genero = $request->genero;
        $especimen->especie = $request->especie;
        $especimen->foto = $request->foto;
        $especimen->fechaColecta = $request->fechaColecta;
        $especimen->pais = $request->pais;
        $especimen->departamento = $request->departamento;
        $especimen->provincia = $request->provincia;
        $especimen->distrito = $request->distrito;
        $especimen->localidad = $request->localidad;
        $especimen->coordenadaA = $request->coordenadaA;
        $especimen->coordenadaB = $request->coordenadaB;
        $especimen->colector = $request->colector;
        $especimen->identificador = $request->identificador;
        $especimen->caracteristicas = $request->caracteristicas;
        $especimen->nIngreso = $request->nIngreso;
        $especimen->nColecta = $request->nColecta;
        $especimen->estadoActual = $request->estadoActual;
        $especimen->tipoPreparacion = $request->tipoPreparacion;
        if($especimen->save())
        {
            return "1";
        }
        else{
            return "0";
        }
    }
    /**
     * carga de data a Maztozoologia
     */
    public function storeMaztozoologia(Request $request)
    {
        $especimen = new Maztozoologia();
        $especimen->codigo = $request->codigo;
        $especimen->orden = $request->orden;
        $especimen->familia = $request->familia;
        $especimen->genero = $request->genero;
        $especimen->especie = $request->especie;
        $especimen->foto = $request->foto;
        $especimen->fechaColecta = $request->fechaColecta;
        $especimen->pais = $request->pais;
        $especimen->departamento = $request->departamento;
        $especimen->provincia = $request->provincia;
        $especimen->distrito = $request->distrito;
        $especimen->localidad = $request->localidad;
        $especimen->coordenadaA = $request->coordenadaA;
        $especimen->coordenadaB = $request->coordenadaB;
        $especimen->colector = $request->colector;
        $especimen->identificador = $request->identificador;
        $especimen->caracteristicas = $request->caracteristicas;
        $especimen->nIngreso = $request->nIngreso;
        $especimen->nColecta = $request->nColecta;
        $especimen->estadoActual = $request->estadoActual;
        $especimen->tipoPreparacion = $request->tipoPreparacion;
        if($ornitologia->save())
        {
            return "1";
        }
        else{
            return "0";
        }
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
        return View("controlEspecimen.ornitologia",[
            "area" => $area
        ]);
    }

    /**
     * registros de especimen segun el area
     */
    public function dataEspecimen($area)
    {
        if($area == "ornitologia")
        {
            $data = ornitologia::all();
            return $data;
        }
        if($area == "herpetologia")
        {
            $data = Herpetologia::all();
            return $data;
        }
        if($area == "maztozoologia")
        {
            $data = Maztozoologia::all();
            return $data;
        }
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
