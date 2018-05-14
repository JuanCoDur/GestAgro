<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaquinariasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maquinaria', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idFiinc')->unsigned();
            $table->integer('idmarc')->unsigned();
            $table->string('Combustible', 8)->nullable();
            $table->string('Rendimiento', 25)->nullable();
            $table->string('ModeloMaq', 15);
            $table->integer('yearFabricacion')->nullable();
            $table->integer('Adepreciacion')->nullable();
            $table->decimal('ValorActMaq', 12,2)->nullable();
            $table->string('Unidad', 25)->nullable();
            $table->string('noSerieMotor', 25)->nullable();

            $table->timestamps();


            $table->foreign('idFiinc')->references('id')->on('finca');
            $table->foreign('idmarc')->references('id')->on('marca');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maquinaria');
    }
}
