<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartaPresentacion extends Model
{
    use HasFactory;

    protected $table = "carta_presentacion";

    /*para asignacion masiva para eloquent*/
    /*protected $fillable=['nombre'];*/
    protected $guarded=[];
}
