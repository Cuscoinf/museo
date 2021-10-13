<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ornitologia extends Model
{
    use HasFactory;
    protected $table = "ornitologia";

	/*para asignacion masiva para eloquent*/
	protected $fillable=[
		'taxonomia',
		'especie',
		'nombreComun',
		'Genero',
		'Familia',
		'Orden',
		'Clase',

		'tipoCaptura',
		'codigoMHNC',
		'codCampo',
		'proyecto',
		'sexo',
		'tejidoADN',
		'preservacion',
		'colector',
		'autor',
		'observacion',
		'foto',

		'pais',
		'provincia',
		'departamento',
		'localidad',
		'distrito',
		'fechaColecta',
		'mapLatitud',
		'mapLongitud'
	];
}
