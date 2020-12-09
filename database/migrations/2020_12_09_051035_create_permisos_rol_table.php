<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermisosRolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permisos_rol', function (Blueprint $table) {
            $table->id();
            $table->integer('funcion_id');
            $table->integer('rol_id');
            $table->boolean('ver');
            $table->boolean('crear');
            $table->boolean('editar');
            $table->boolean('eliminar');
            $table->timestamps();

            $table->foreign('funcion_id')->references('id')->on('funciones');
            $table->foreign('rol_id')->references('id')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permisos_rol');
    }
}
