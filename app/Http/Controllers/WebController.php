<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Investigador;
use App\Models\ProyectoInvestigacion;


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
        $investigador = new Investigador();
        $investigador->nombre = $request->nombre;
        $investigador->apPaterno = $request->apPaterno;
        $investigador->apMaterno = $request->apMaterno;
        $investigador->email = $request->email;
        $investigador->tipoDocumento = "DNI";
        $investigador->nroDocumento = $request->dni;
        $investigador->tipoUsuario = "Investigador";
        $investigador->
        if($investigador->save())
        {

        }
    }
}
