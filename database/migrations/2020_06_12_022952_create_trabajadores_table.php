<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrabajadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabajadores', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('Foto')->nullable();
            $table->string('Nombre')->nullable();
            $table->string('ApellidoPaterno')->nullable();
            $table->string('ApellidoMaterno')->nullable();
            $table->string('Correo')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('trabajadores');
    }
}
