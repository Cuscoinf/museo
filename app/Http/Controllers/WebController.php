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
        $investigador->telefono = $request->telefono;
        $investigador->tipoDocumento = "DNI";
        $investigador->nroDocumento = $request->dni;
        $investigador->tipoUsuario = "Investigador";
        $investigador->genero = $request->genero;
        $investigador->slug = $request->apPaterno."-".$request->nombre;
        $investigador->condicion = $request->condicion;

        if($investigador->save())
        {
            $proyecto = new ProyectoInvestigacion();
            $proyecto->serfor = "Pendiente";
            $proyecto->titulo = $request->proyecto;
            $proyecto->lugar = $request->lugar;
            $proyecto->planInvestigacion = $request->planinvestigacion;
            $proyecto->fichaDatos = $request->fichadatos;
            $proyecto->investigador_id = $investigador->id;
            $proyecto->estado = "Pendiente";
            if($proyecto->save())
            {
                $solicitud = new Solicitud();
                $solicitud->proyectoInvestigacion_id = $proyecto->id;
                $solicitud->contenido = $request->contenido;
                if($solicitud->save())
                {
                    return "exito";
                }
            }
        }
    }
}
