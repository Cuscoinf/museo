<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditArea;
use App\Http\Requests\StoreArea;
use App\Models\Area;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class AreaController extends Controller
{

    public function index(Request $request){

        $areas=Area::orderBy('id','desc')->paginate();


        //obtenemos los permisos de usuario en funcion al menu
        if(Auth::user()->rol!="investigador")
        {

            $menuPermisos=["crear"=>1,"editar"=>1,"eliminar"=>1,"ver"=>1];
        }
        else
        {
            $idUsuario=Auth::user()->id;
            $idmenu=Menu::where('item','area')->first();
            $menuPermisos = DB::table('menu_user')
                ->select('menu_id', 'user_id','crear','editar','eliminar','ver')
                ->where('menu_id', '=', $idmenu->id)
                ->where('user_id', '=', $idUsuario)
                ->first();

        }


        return view('area.index',compact('areas','menuPermisos'))->with('i', (request()->input('page', 1) - 1) * 5);

        /*if($request->ajax()){
            return Area::all();
        }else{
            return view('area.index');
        }*/

    }



    public function create(){

        return view('area.create');
    }

    public function show(Area $area){

        return view('area.show',compact('area'));
    }

    public function store(StoreArea $request){

        /*$area=new Area();
        $area->nombre=$request->nombre;
        $area->save();*/

        $request->merge([
            'slug'=>Str::slug($request->nombre,'-')
        ]);

        $area=Area::create($request->all());

        //return redirect()->route('area.show',$area);
        return redirect()->route('area.index');

    }

    public function edit(Area $area){
        //return view('area.edit',compact('area'));
        $areas=Area::orderBy('id','desc')->paginate();
        $i=1;
        return view('area.index',compact('area','areas','i'));
    }

    public function update(EditArea $request,$id){

        $request->merge([
            'slug'=>Str::slug($request->nombre,'-')
        ]);
        //$area->update($request->all());
        //return redirect()->route('area.show',$area);
        //return redirect()->route('area.index');


        $area = Area::findOrFail($id);

        $area->update($request->all());
    }

    public function destroy($id){
        /*$area->delete();
        return redirect()->route('area.index');
*/
        $area = Area::findOrFail($id);
        $area->delete();
        return response()->json([
         'message' => 'User deleted successfully'
        ]);
    }

    public function getAreas(Request $request){

        return Area::all();
    }

    public function getArea($id){

        return Area::findOrFail($id);
    }

}
