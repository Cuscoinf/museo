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
    //protected $fillable=['gradoAcademico'];
    protected $guarded=[];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
