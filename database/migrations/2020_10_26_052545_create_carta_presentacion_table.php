<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartaPresentacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carta_presentacion', function (Blueprint $table) {
            $table->id();
            $table->string('nro_carta');
            $table->string('nro_solicitud')->nullable();
            $table->string('destinatario');
            $table->string('cargo');
            $table->string('lugar');
            $table->string('proyecto');
            $table->text('contenido');
            $table->foreignId('investigador_id')->references('id')->on('investigador')->onDelete('cascade');
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
        Schema::dropIfExists('carta_presentacion');
    }
}
