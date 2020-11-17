<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    /*asignar clase a la tabla de la bd*/
    protected $table = "menu";

    /*para asignacion masiva para eloquent*/
    /*protected $fillable=['nombre'];*/
    protected $guarded=[];

    public function users()
    {
        return $this->belongsToMany('App\Models\User')->withTimestamps();
    }
}
