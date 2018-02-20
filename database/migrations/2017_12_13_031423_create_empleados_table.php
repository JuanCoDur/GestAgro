<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fin_id')->unsigned();
            $table->string('nomemp');
            $table->integer('edademp');
            $table->string('edocivil');
            $table->integer('depmenor');
            $table->integer('depmayor');
            $table->string('discapacidades');
            $table->string('domemp');
            $table->integer('telcasa');
            $table->integer('celemp');
            $table->string('email');
            $table->string('preparacion');
            $table->string('sueldonto');
            $table->string('cargo');
            $table->string('jefedirecto');
            $table->string('subordinados');

            $table->timestamps();

            $table->foreign('fin_id')->references('id')->on('fincas')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
