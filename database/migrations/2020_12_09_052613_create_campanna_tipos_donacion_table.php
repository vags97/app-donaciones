<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampannaTiposDonacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campanna_tipos_donacion', function (Blueprint $table) {
            $table->id();
            $table->integer('tipo_donacion_id');
            $table->integer('campanna_id');
            $table->timestamps();

            $table->foreign('tipo_donacion_id')->references('id')->on('tipos_donacion');
            $table->foreign('campanna_id')->references('id')->on('campannas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campanna_tipos_donacion');
    }
}
