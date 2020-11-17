<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEditFormacionAcademica;
use App\Http\Requests\StoreFormacionAcademica;
use App\Models\FormacionAcademica;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FormacionAcademicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formacionesAcademicas=FormacionAcademica::orderBy('id','desc')->paginate();
        return view('formacion-academica.index',compact('formacionesAcademicas'))->with('i', (request()->input('page', 1) - 1) * 5);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formacion-academica.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFormacionAcademica $request)
    {
        $request->merge([
            'slug'=>Str::slug($request->gradoAcademico,'-')
        ]);

        $formacionAcademica=FormacionAcademica::create($request->all());
        return redirect()->route('formacion-academica.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(FormacionAcademica $formacionAcademica)
    {
        return view('formacion-academica.show',compact('formacionAcademica'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(FormacionAcademica $formacion_academica)
    {

        return view('formacion-academica.edit',compact('formacion_academica'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreEditFormacionAcademica $request,FormacionAcademica $formacion_academica)
    {

        $request->merge([
            'slug'=>Str::slug($request->gradoAcademico,'-')
        ]);

        $formacion_academica->update($request->all());
        //return redirect()->route('area.show',$area);
        return redirect()->route('formacion-academica.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormacionAcademica $formacionAcademica)
    {
        $formacionAcademica->delete();
        return redirect()->route('formacion-academica.index');
    }
}
