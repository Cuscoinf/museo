<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditInvestigador;
use App\Http\Requests\StoreInvestigador;
use App\Models\Investigador;
use App\Models\Area;
use App\Models\Menu;
use App\Models\User;
use App\Models\FormacionAcademica;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class InvestigadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $investigadores=Investigador::orderBy('id','desc')->paginate();
        $areas = Area::all();
        $formacion = FormacionAcademica::all();
        return view('investigador.index',compact('investigadores', 'areas', 'formacion'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('investigador.create');
    }
    
    public function dashboard()
    {
        return View('investigador.dashboard',[]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInvestigador $request)
    {
        $slugGenerado=$request->apPaterno.$request->apMaterno.$request->nombre;
        $request->merge([
            'slug'=>Str::slug($slugGenerado,'-')
        ]);
        $investigador=Investigador::create($request->all());
        return redirect()->route('investigador.index');
    }

    public function getData()
    {
        return response()->json(Investigador::all());
    }

    public function storeApi(StoreInvestigador $request)
    {
        $slugGenerado=$request->apPaterno.$request->apMaterno.$request->nombre;
        $request->merge([
            'slug'=>Str::slug($slugGenerado,'-')
        ]);
        if($investigador=Investigador::create($request->all()))
        {
            return response()->json(["respuesta"=>"1"]);
        }
    }

    public function registroInvestigador()
    {
        return View('web.solicitud',[]);
    }

    public function storeRegistroInvestigador(Request $request)
    {
        $respuesta = 1;
        $mensaje = "";
        try{
            /**
             * transaccion de solicitud
             * Registro de investigador
             */
            $investigador = new Investigador();
            $investigador->condicion = $request->condicion;
            $investigador->nombres = $request->nombre;
            $investigador->apPaterno = $request->apPaterno;
            $investigador->apMaterno = $request->apMaterno;
            $investigador->tipoDocumento = $request->tipoDocumento;
            $investigador->documento = $request->documento;
            $investigador->email = $request->email;
            $investigador->telefono = $request->telefono;
            $investigador->genero = $request->genero;
            $investigador->pais = $request->pais;
            $investigador->estado = $request->estado;
            $investigador->save();
    
            /**
             * Registro de formacion academica
             */
            $formacionAcademica = new FormacionAcademica();
            $formacionAcademica->universidad = $request->universidad;
            $formacionAcademica->grado = $request->grado;
            $formacionAcademica->paisFormacion = $request->paisFormacion;
            $formacionAcademica->anio = $request->anio;
            $formacionAcademica->save();
    
            /**
             * Creacion de cuenta de usuario
             */
            $user = new User();
            $user->name = $request->nombres;
            $user->rol = "investigador";
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->save();
        }
        catch(\Exception $ex)
        {
            $respuesta = 0;
            $mensaje = $ex;
        }

        return response()->json(["respuesta" => $respuesta, "mensaje" => $mensaje]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Investigador $investigador)
    {
        return view('investigador.show',compact('investigador'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Investigador $investigador)
    {
        return view('investigador.edit',compact('investigador'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditInvestigador $request, Investigador $investigador)
    {
        $slugGenerado=$request->apPaterno.$request->apMaterno.$request->nombre;

        $request->merge([
            'slug'=>Str::slug($slugGenerado,'-')
        ]);

        $investigador->update($request->all());
        return redirect()->route('investigador.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Investigador $investigador)
    {
        $investigador->delete();
        return redirect()->route('investigador.index');
    }

    public function storeUser(Request $request)
    {
        $investigador = Investigador::find($request->id);

        $userExistente = User::Where("email", $investigador->email)->first();

        if($userExistente == null)
        {
            $user = new User();
            $user->name = $investigador->nombre;
            $user->rol = 'investigador';
            $user->email = $investigador->email;
            $user->password = bcrypt($request->password);
            $mensaje = "";
            
            if($user->save())
            {
                $mensaje = "Acceso generado";
            }
            else{
                $mensaje = "Error";
            }

        }
        else{
            $userExistente->password = bcrypt($request->password);
            if($userExistente->save())
            {
                $mensaje = "Acceso generado";
            }
            else{
                $mensaje = "Error";
            }
        }
        return redirect()->route("investigador.index");
    }

    public function updateUser(Request $request,$usuario)
    {
        $usuarioE=User::find($usuario);
        $usuarioE->update($request->all());
        return redirect()->route('roles.index');
    }

    //Zona de investigadores
    public function solicitarInvestigacion()
    {
        return view('investigador.solicitud');
    }
    public function solicitarDeposito()
    {
        return view('investigador.deposito');
    }
    public function depositarEspecimen()
    {
        return view('investigador.registroespecimen');
    }
    public function casoFortuito()
    {
        return view('investigador.casoFortuito');
    }
    public function notificaciones()
    {
        return view('investigador.notificaciones');
    }
}
