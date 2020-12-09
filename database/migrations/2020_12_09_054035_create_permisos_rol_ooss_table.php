<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermisosRolOossTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permisos_rol_ooss', function (Blueprint $table) {
            $table->id();
            $table->integer('funcion_os_id');
            $table->integer('rol_os_id');
            $table->boolean('ver');
            $table->boolean('crear');
            $table->boolean('editar');
            $table->boolean('eliminar');
            $table->timestamps();

            $table->foreign('funcion_os_id')->references('id')->on('funciones_ooss');
            $table->foreign('rol_os_id')->references('id')->on('roles_ooss');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permisos_rol_ooss');
    }
}
