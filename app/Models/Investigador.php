<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investigador extends Model
{
    use HasFactory;

    /*asignar clase a la tabla de la bd*/
    protected $table = "investigador";

    /*para asignacion masiva para eloquent*/
    protected $fillable=['nombre','apPaterno','apMaterno','tipoUsuario','email','tipoDocumento','nroDocumento','pais','genero','estado','direccion','telefono','formacion_academica_id','area_id','slug'];

    protected $guarded=[];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
