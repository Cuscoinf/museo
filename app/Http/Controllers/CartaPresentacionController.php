<?php

namespace App\Http\Controllers;

use App\Models\CartaPresentacion;
use App\Models\Investigador;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PDF;

class CartaPresentacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartas=CartaPresentacion::orderBy('id','desc')->paginate();
        $investigadores=Investigador::orderBy('id','desc')->paginate();


        //obtenemos los permisos de usuario en funcion al menu
       /* if(Auth::user()->rol!="investigador")
        {

            $menuPermisos=["crear"=>1,"editar"=>1,"eliminar"=>1,"ver"=>1];
        }
        else
        {
            $idUsuario=Auth::user()->id;
            $idmenu=Menu::where('item','carta_presentacion')->first();
            $menuPermisos = DB::table('menu_user')
                ->select('menu_id', 'user_id','crear','editar','eliminar','ver')
                ->where('menu_id', '=', $idmenu->id)
                ->where('user_id', '=', $idUsuario)
                ->first();

        }
        */
        return view('carta-presentacion.index',compact('investigadores'))->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('carta-presentacion.create');
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
        $investigador=Investigador::find($id);
        return view('carta-presentacion.edit',compact('investigador'));
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //'proyecto' => date('m/d/Y')
    }

    public function generatePDF(Request $request)
    {
        
        $data = [
            'investigador' => $request->investigador_id,
            'proyecto' => $request->proyecto
        ];

        $cartaPresentacion = new CartaPresentacion();
        $cartaPresentacion->nro_carta = $request->nro_carta;
        $cartaPresentacion->nro_solicitud = $request->nro_solicitud;
        $cartaPresentacion->destinatario = $request->destinatario;
        $cartaPresentacion->cargo = $request->cargo;
        $cartaPresentacion->lugar = $request->lugar;
        $cartaPresentacion->proyecto = $request->proyecto;
        $cartaPresentacion->contenido = $request->contenido;
        $cartaPresentacion->investigador_id = $request->investigador_id;

        $cartaPresentacion->save();

        return PDF::loadView('carta-presentacion.generarpdf', ["contenido"=>$request->contenido])->stream('cartapresentacion.pdf');

        //return $pdf->download('cartapresentacion.pdf');
    }
}
