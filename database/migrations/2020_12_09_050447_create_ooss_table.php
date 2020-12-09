<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOossTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ooss', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('comuna_id');
            $table->string('direccion')->nullable();
            $table->boolean('donaciones_monetarias');
            $table->string('donaciones_monetarias_detalle')->nullable();
            $table->string('email');
            $table->string('telefono')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('imagen_perfil')->nullable();
            $table->timestamps();

            $table->foreign('comuna_id')->references('id')->on('comunas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ooss');
    }
}
