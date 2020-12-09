<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampannasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campannas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('descripcion', 2000);
            $table->string('imagen')->nullable();
            $table->bigInteger('donacion_monetaria_meta')->nullable();
            $table->bigInteger('donacion_monetaria_recaudada')->nullable();
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
        Schema::dropIfExists('campannas');
    }
}
