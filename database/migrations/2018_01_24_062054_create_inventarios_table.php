<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventarios', function (Blueprint $table) {
            $table->integer('idFinca')->unsigned();
            $table->integer('idProd')->unsigned();
            $table->primary(['idFinca','idProd']);
            $table->integer('existencia');

            $table->timestamps();

            $table->foreign('idFinca')->references('id')->on('fincas');
            $table->foreign('idProd')->references('id')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventarios');
    }
}
