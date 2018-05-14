<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrediosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('predio', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idFin')->unsigned();
            $table->string('nombrePredio', 30);
            $table->integer('numLote');
            $table->decimal('superficie', 10,2);
            $table->string('regimenHumedad', 20);
            $table->string('tipRiego', 20);
            $table->float('latitud',10,6)->nullable();
            $table->float('longitud',10,6)->nullable();
            $table->float('altitud',10,6)->nullable();
            $table->text('observaciones')->nullable();

            $table->timestamps();

            $table->foreign('idFin')->references('id')->on('finca');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('predio');
    }
}
