<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuestionarioAnexosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuestionario_anexos', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_aplicacion')->nullable();
            $table->string('descripcion'); //Inicio, Finalizo
            //FK
            $table->bigInteger('alumno_id')->unsigned();
            $table->foreign('alumno_id')->references('nia')->on('alumnos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cuestionario_anexos');
    }
}
