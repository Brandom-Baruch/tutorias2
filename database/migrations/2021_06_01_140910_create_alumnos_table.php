<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->integer('nia')->primary(); //El nia sera unico
            $table->string('name')->length(50);
            $table->tinyInteger('edad')->length(3);
            $table->string('apellidoP')->length(20); //ApellidoP
            $table->string('apellidoM')->length(20); //ApellidoM
            $table->date('fechaN'); //Fecha Nacimiento
            $table->char('genero')->length(2);//genero
            $table->string('phone')->length(20);
            $table->string('email')->unique()->length(50);
            $table->string('password')->length(60);
            //FK Relacion entre el grupo
            $table->bigInteger('grupo_id')->unsigned();
            $table->foreign('grupo_id')->references('id')->on('grupos'); 
            $table->rememberToken(); //Necesario para la autenticación por token
            $table->timestamps(); //Crea dos atributos, uno para indicar cuando fue creado y otro para indicar cuando actualizo
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
}
