<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampannaInsumosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campanna_insumos', function (Blueprint $table) {
            $table->id();
            $table->integer('campanna_id');
            $table->string('nombre');
            $table->bigInteger('meta');
            $table->bigInteger('recaudado');
            $table->integer('unidad_medida_id');
            $table->timestamps();

            $table->foreign('campanna_id')->references('id')->on('campannas');
            $table->foreign('unidad_medida_id')->references('id')->on('unidades_medida');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campanna_insumos');
    }
}
