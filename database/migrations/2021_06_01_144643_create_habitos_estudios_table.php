<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHabitosEstudiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habitos_estudios', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('entrevista_id')->unsigned(); //alumno
            $table->foreign('entrevista_id')->references('id')->on('entrevista_fresca_alumnos');
            $table->string('respuesta1');           
            $table->string('respuesta2');
            $table->string('respuesta3');            
            $table->string('respuesta4');
            $table->string('respuesta5');
            $table->string('r5')->nullable();
            $table->string('respuesta6');
            $table->string('r6')->nullable();
            $table->string('respuesta7'); 
            $table->string('r7')->nullable();
            $table->string('respuesta8');
            $table->string('r8')->nullable();            
            $table->string('r9_1');
            $table->string('r9_2');
            $table->string('r9_3');
            $table->string('r9_4');
            $table->string('r9_5');
            $table->string('r9_6');
            $table->string('r9_7');
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
        Schema::dropIfExists('habitos_estudios');
    }
}
