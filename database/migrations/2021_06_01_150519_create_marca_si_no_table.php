<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarcaSiNoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marca_si_no', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('entrevista_id')->unsigned();
            $table->foreign('entrevista_id')->references('id')->on('entrevista_fresca_padres');
            //Marca Si No
            $table->string('respuesta1',3);
            $table->string('respuesta2',3);
            $table->string('respuesta3',3);
            $table->string('respuesta4',3);
            $table->string('respuesta5',3);
            $table->string('respuesta6',3);
            $table->string('respuesta7',3);
            $table->string('respuesta8',3);
            $table->string('respuesta9',3);
            $table->string('respuesta10',3);
            $table->string('respuesta11',3);
            $table->string('respuesta12',3);
            $table->string('respuesta13',3);
            $table->string('respuesta14',3);
            $table->string('respuesta15',3);
            $table->string('respuesta16',3);
            $table->string('respuesta17',3);
            $table->string('respuesta18',3);
            //Describa brevemente como es su hijo 
            $table->string('respuesta19',250);
            //¿Con que persona considera usted que su hijo tiene más confianza? 
            $table->string('respuesta20',250);
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
        Schema::dropIfExists('marca_si_no');
    }
}
