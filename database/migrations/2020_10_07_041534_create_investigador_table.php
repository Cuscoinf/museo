<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestigadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investigador', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apPaterno');
            $table->string('apMaterno');
            $table->string('tipoUsuario');
            $table->string('email')->unique();
            $table->string('tipoDocumento');
            $table->string('nroDocumento');
            $table->string('pais');
            $table->string('genero');
            $table->string('estado');
            $table->string('direccion');
            $table->string('telefono');
            $table->unsignedBigInteger('formacion_academica_id')->unsigned();
            $table->unsignedBigInteger('area_id')->unsigned();
            $table->string('slug');
            $table->timestamps();
            $table->foreign('formacion_academica_id')->references('id')->on('formacion_academica');
            $table->foreign('area_id')->references('id')->on('area');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('investigador');
    }
}
