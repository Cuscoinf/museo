<?php

namespace App\Http\Controllers;
use App\Models\Investigador;
use App\Models\FormacionAcademica;
use App\Models\Area;
use App\Models\Solicitud;

use Illuminate\Http\Request;

class SolicitudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $investigadores = Investigador::all();
        $areas = Area::all();
        return View("registro-solicitud.index", compact("investigadores","areas"));
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

    public function solicitudesInvestigacion()
    {
        $solicitudes = Solicitud::join("proyectoInvestigacion", "proyectoInvestigacion.id","=","solicitud.proyectoInvestigacion_id")
        ->join("investigador", "investigador.id","=", "proyectoInvestigacion.investigador_id")
        ->select("solicitud.id","proyectoInvestigacion.serfor","solicitud.updated_at","investigador.nombre", "investigador.apPaterno","proyectoInvestigacion.titulo")
        ->get();
        return View("solicitudes.investigacion",[
            "solicitudes" => $solicitudes
        ]);
    }

    public function solicitudes()
    {
        $solicitudes = Solicitud::join("proyectoInvestigacion", "proyectoInvestigacion.id","=","solicitud.proyectoInvestigacion_id")
        ->join("investigador", "investigador.id","=", "proyectoInvestigacion.investigador_id")
        ->select("solicitud.id","proyectoInvestigacion.serfor","solicitud.updated_at","investigador.nombre", "investigador.apPaterno","proyectoInvestigacion.titulo")
        ->get();
        return View("solicitudes.deposito",[
            "solicitudes" => $solicitudes
        ]);
    }

    public function solicitudesRegistro()
    {
        $solicitudes = Investigador::join('users', 'investigador.email', '=', 'users.email')
        ->join('formacion_academica', 'formacion_academica.id', '=', 'investigador.formacion_academica_id')
        ->where('users.estado','=','0')
        ->select('investigador.nombre', 'investigador.condicion',
         'investigador.apPaterno', 'investigador.apMaterno', 'investigador.email', 'users.estado',
         'formacion_academica.gradoAcademico', 'formacion_academica.universidad'
         )
        ->get();

        return View('solicitudes.registros', [
            "solicitudes" => $solicitudes,
        ]);

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
    public function mostrar($id)
    {
        $solicitud = Solicitud::join("proyectoInvestigacion", "proyectoInvestigacion.id","=","solicitud.proyectoInvestigacion_id")
        ->join("investigador", "investigador.id","=", "proyectoInvestigacion.investigador_id")
        ->where("solicitud.id","=",$id)
        ->first();

        //dd($solicitud);

        return View("carta-presentacion.muestraSolicitud",[
            "solicitud" => $solicitud
        ]);

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
