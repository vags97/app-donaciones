<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermisosUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permisos_user', function (Blueprint $table) {
            $table->id();
            $table->integer('funcion_id');
            $table->integer('user_id');
            $table->integer('os_id');
            $table->boolean('ver');
            $table->boolean('crear');
            $table->boolean('editar');
            $table->boolean('eliminar');
            $table->timestamps();

            $table->foreign('funcion_id')->references('id')->on('funciones');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('os_id')->references('id')->on('ooss');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permisos_user');
    }
}
