<?php

namespace App\Http\Controllers;

use App\Models\Deposito;
use Illuminate\Http\Request;
use Auth;

class DepositoController extends Controller
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
        $deposito = new Deposito();
        $deposito->usuario_id = Auth::user()->id;
        $deposito->area = $request->area;
        $deposito->especimen_id = $request->especimenId;
        $deposito->estado = $request->estado;
        $deposito->observacion = $request->observacion;

        if($deposito->save())
        {
            return "1";
        }
        else{
            return "0";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Deposito  $deposito
     * @return \Illuminate\Http\Response
     */
    public function show(Deposito $deposito)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Deposito  $deposito
     * @return \Illuminate\Http\Response
     */
    public function edit(Deposito $deposito)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Deposito  $deposito
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Deposito $deposito)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Deposito  $deposito
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deposito $deposito)
    {
        //
    }

    /**
     * Reportes
     */

     public function reporteSerfor()
     {
        
        $registros = Deposito::all();
        return View('reportes.reporteSerfor',[]);
        
     }
     
     public function reporteInvestigador()
     {
        return View('reportes.reporteInvestigador');
     }
     
     public function reporteFortuitos()
     {
        return View('reportes.reporteFortuitos');
     }

}
