<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditInvestigador;
use App\Http\Requests\StoreInvestigador;
use App\Models\Investigador;
use App\Models\Menu;
use App\Models\User;
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


        return view('investigador.index',compact('investigadores'))->with('i', (request()->input('page', 1) - 1) * 5);;
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Investigador $investigador)
    {
        return view('investigador.index',compact('investigador'));
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
        $user=User::create($request->all());
        return redirect()->route('roles.index');
    }

    public function updateUser(Request $request,$usuario)
    {
        $usuarioE=User::find($usuario);
        $usuarioE->update($request->all());
        return redirect()->route('roles.index');
    }
}
