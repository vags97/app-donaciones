<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolUserOossTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rol_user_ooss', function (Blueprint $table) {
            $table->id();
            $table->integer('rol_os_id');
            $table->bigInteger('user_id');
            $table->integer('os_id');
            $table->timestamps();

            $table->foreign('rol_os_id')->references('id')->on('roles_ooss');
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
        Schema::dropIfExists('rol_user_ooss');
    }
}
