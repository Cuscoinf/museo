<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrnitologiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ornitologias', function (Blueprint $table) {
            $table->id();
            $table->string('taxonomia');
            $table->string('especie');
            $table->string('nombreComun');
            $table->string('Genero');
            $table->string('Familia');
            $table->string('Orden');
            $table->string('Clase');

            $table->string('tipoCaptura');
            $table->string('codigoMHNC');
            $table->string('codCampo');
            $table->string('proyecto');
            $table->string('sexo');
            $table->string('tejidoADN');
            $table->string('preservacion');
            $table->string('colector');
            $table->string('autor');
            $table->string('observacion');
            $table->string('foto');

            $table->string('pais');
            $table->string('provincia');
            $table->string('departamento');
            $table->string('localidad');
            $table->string('distrito');
            $table->string('fechaColecta');
            $table->string('mapLatitud');
            $table->string('mapLongitud');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ornitologias');
    }
}
