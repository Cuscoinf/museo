<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    /*asignar clase a la tabla de la bd*/
    protected $table = "area";

    /*para asignacion masiva para eloquent*/
    /*protected $fillable=['nombre'];*/
    protected $guarded=[];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
