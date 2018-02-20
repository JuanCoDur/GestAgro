<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePozosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pozos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idFiin')->unsigned();
            $table->string('pozo', 50);
            $table->string('medidor', 50)->nullable();
            $table->string('ubicacionPzo', 50)->nullable();
            $table->float('latitud',10,6)->nullable();
            $table->float('longitud',10,6)->nullable();
            $table->float('altitud',10,6)->nullable();
            $table->timestamps();


            $table->foreign('idFiin')->references('id')->on('fincas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pozos');
    }
}
