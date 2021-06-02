<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentosPadreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentos_padre', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_archivo');
            //FK
            $table->integer('padre_id')->unsigned();
            $table->foreign('padre_id')->references('id')->on('padre_familias');
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
        Schema::dropIfExists('documentos_padre');
    }
}
