<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallesventasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detallesventas', function (Blueprint $table) {
            $table->integer('idFincas')->unsigned();
            $table->integer('FolVta')->unsigned();
            $table->integer('idPto')->unsigned();
            $table->primary(['idFincas','FolVta','idPto']);
            $table->integer('cantidadVta');
            $table->decimal('precioVta', 8,2);
            $table->decimal('importeVta', 6,2);

            $table->timestamps();

            $table->foreign('FolVta')->references('folioVta')->on('ventas');
            $table->foreign('idFincas')->references('id')->on('fincas');
            $table->foreign('idPto')->references('idProd')->on('inventarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detallesventas');
    }
}
