<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePadreFamiliasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('padre_familias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->length(50);//brandom baruch
            $table->string('apellidoP')->length(20);
            $table->string('apellidoM')->length(20);
            $table->string('email')->unique()->length(50);
            $table->string('password')->length(60);
            $table->tinyInteger('edad')->length(3);
            $table->string('curp')->unique()->length(20); 
            $table->string('telefono_fijo')->length(20);
            $table->string('telefono_cel')->length(20);
            $table->string('profesion')->length(30);
            $table->string('ocupacion')->length(50);
            $table->string('escolaridad')->length(20);
            $table->string('estado_civil')->length(10);//soltero casado
            $table->rememberToken();
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
        Schema::dropIfExists('padre_familias');
    }
}
