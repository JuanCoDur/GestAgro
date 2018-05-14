<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallescomprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detallescompras', function (Blueprint $table) {
            $table->integer('idFin')->unsigned();
            $table->integer('FolCpra')->unsigned();
            $table->integer('idPro')->unsigned();
            $table->primary(['idFin','FolCpra','idPro']);
            $table->integer('cantidadCom');
            $table->decimal('precioCom', 8,2);
            $table->decimal('importeCom', 6,2);

            $table->timestamps();

            $table->foreign('FolCpra')->references('folioCra')->on('compras');
            $table->foreign('idFin')->references('id')->on('fincas');
            $table->foreign('idPro')->references('idProd')->on('inventarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detallescompras');
    }
}
