<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docentes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->length(50);
            $table->string('apellidoP')->length(20);
            $table->string('apellidoM')->length(20);
            $table->tinyInteger('edad')->length(3);
            $table->string('email')->unique()->length(50); //El correo sera unico para cada usuario
            $table->string('password')->length(60);
            $table->string('telefono_fijo')->length(20);
            $table->string('telefono_cel')->length(20);            
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
        Schema::dropIfExists('docentes');
    }
}
