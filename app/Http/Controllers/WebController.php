<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Investigador;
use App\Models\ProyectoInvestigacion;
use App\Models\Solicitud;


class WebController extends Controller
{
    public function index()
    {
        return View('web.index',["titulo"=>"Museo UNSAAC"]);
    }

    public function solicitudes()
    {
        return View('web.solicitud');
    }

    public function generarSolicitud(Request $request)
    {
        //crear al investigador
        $investigador = new Investigador();
        $investigador->nombre = $request->nombre;
        $investigador->apPaterno = $request->apPaterno;
        $investigador->apMaterno = $request->apMaterno;
        $investigador->email = $request->email;
        $investigador->tipoDocumento = "DNI";
        $investigador->nroDocumento = $request->dni;
        $investigador->tipoUsuario = "Investigador";
        $investigador->estado = $request->estado;
        $investigador->condicion = $request->condicion;

        if($investigador->save())
        {
            $proyecto = new ProyectoInvestigacion();
            $proyecto->serfor = "00000";
            $proyecto->nombre = $request->proyecto;
            $proyecto->lugar = $request->lugar;
            $proyecto->serfor = $request->fichadatos;
            $proyecto->planInvestigacion = $request->planInvestigacion;
            $proyecto->investigador_id = $investigador->id;
            if($proyecto->save())
            {
                $solicitud = new Solicitud();
                $solicitud->proyectoInvestigacion_id = $proyecto->id;

            }
        }
    }
}
