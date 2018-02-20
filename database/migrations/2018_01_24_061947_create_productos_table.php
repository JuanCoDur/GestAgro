<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idClasif')->unsigned();
            $table->string('nomProducto');
            $table->text('descripcion')->nullable();
            $table->decimal('costo', 6,2);
            $table->decimal('preciovta', 6,2);

            $table->timestamps();

            $table->foreign('idClasif')->references('id')->on('clasificaciones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
