<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->increments('folioCra');
            $table->integer('idFnca')->unsigned();
            $table->integer('idProv')->unsigned();
            $table->dateTime('fecCompra');
            $table->decimal('totalCompra', 8,2);

            $table->timestamps();

            $table->foreign('idFnca')->references('id')->on('fincas');
            $table->foreign('idProv')->references('id')->on('proveedores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compras');
    }
}
