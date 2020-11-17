<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    public function index(Request $request)
    {

        $usuarios = User::all();
        $menus = Menu::all();
        return view('roles.index', compact('usuarios', 'menus'));
    }

    public function getMenus()
    {
        return Menu::all();
    }
    public function getMenuUser($id)
    {

        $menuitemsuser = DB::select("select menu_user.id,menu.item,menu_user.crear,menu_user.editar,menu_user.eliminar,menu_user.ver from menu_user inner join menu on menu_user.menu_id=menu.id where menu_user.user_id=" . $id);

        return $menuitemsuser;
    }

    public function asignarRoles($id)
    {
        $usuario = User::find($id);
        return view('roles.asignar', compact('usuario'));
    }

    public function store(Request $request)
    {

        $existencia = DB::table('menu_user')
            ->select('menu_id', 'user_id')
            ->where('menu_id', '=', $request->idMenu)
            ->where('user_id', '=', $request->idUser)
            ->get();


        if (count($existencia) >= 1)
        {
            return "existe"; //NO GUARDA
        }
        else
        {

            $user = User::find($request->idUser);
            $user->menus()->attach(
                [
                    $request->idMenu => ['crear' => false, 'editar' => false, 'eliminar' => false, 'ver' => true]

                ]
            );

            return 'guardado';

           // return "no existe"; //GUARDA
        }
    }

    public function actualizarPermiso(Request $request)
    {

       $menusUsers=DB::table('menu_user')
                            ->where('id',$request->id)
                            ->update(['crear'=>$request->crear,'editar'=>$request->editar,'eliminar'=>$request->eliminar,'ver'=>$request->ver]);
        return $menusUsers;
    }

    public function destroy($id)
    {
            $menuUsers = DB::table('menu_user')->where('id', '=', $id)->delete();

            return response()->json([
             'message' => 'User deleted successfully'
            ]);

    }

}
