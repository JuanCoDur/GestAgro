<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->increments('folioVta');
            $table->integer('idFnca')->unsigned();
            $table->integer('idCte')->unsigned();
            $table->dateTime('fecVenta');
            $table->decimal('totalCompra', 8,2);

            $table->timestamps();

            $table->foreign('idFnca')->references('id')->on('finca');
            $table->foreign('idCte')->references('id')->on('cliente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventas');
    }
}
