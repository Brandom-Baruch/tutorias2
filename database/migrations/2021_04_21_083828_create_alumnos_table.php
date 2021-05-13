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
            $table->integer('nia'); //El nia sera unico
            $table->string('name');
            $table->tinyInteger('edad');
            $table->string('apellidoP'); //ApellidoP
            $table->string('apellidoM'); //ApellidoM
            $table->date('fechaN'); //Fecha Nacimiento
            $table->string('genero');//genero
            $table->string('phone');
            $table->string('email',100)->unique();
            $table->string('password');
            //FK Relacion entre el grupo
            $table->integer('grupo_id')->unsigned();
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
