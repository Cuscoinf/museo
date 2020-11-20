<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'rol',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function adminlte_image()
    {
        return 'https://picsum.photos/300/300';
    }

    public function adminlte_desc()
    {
        return 'rol de usuario';
    }

    public function menus()
    {
        return $this->belongsToMany('App\Models\Menu')->withTimestamps();
    }

    public function menuItems()
    {
        $id=Auth::user()->id;

        //$menuitemsuser = DB::select("select * from menu_user inner join menu on menu_user.menu_id=menu.id where menu_user.user_id=1");

        $menuitemsuser = DB::select("select menu_user.id,menu.item,menu_user.crear,menu_user.editar,menu_user.eliminar,menu_user.ver from menu_user inner join menu on menu_user.menu_id=menu.id where menu_user.user_id=".$id);

        //dd(json_encode($menuitemsuser));
        //return json_encode($menuitemsuser);
        return $menuitemsuser;
    }


}
