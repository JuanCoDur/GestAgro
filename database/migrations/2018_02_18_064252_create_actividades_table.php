<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividades', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idFiinca')->unsigned();
            $table->string('NomPredio', 25);
            $table->integer('noLote')->mullable();
            $table->text('actividadRealizada')->mullable();
            $table->text('empleadosInvolucrados')->mullable();
            $table->string('tiempoEmpleado', 25)->mullable();
            $table->text('vehInvolucrados')->mullable();
            $table->timestamps();


            $table->foreign('idFiinca')->references('id')->on('fincas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actividades');
    }
}
