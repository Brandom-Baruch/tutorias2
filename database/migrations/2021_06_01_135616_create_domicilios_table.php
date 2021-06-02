<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDomiciliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domicilios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('estado',50);
            $table->string('municipio',100);//Santa Ana Nopalucan
            $table->string('localidad',100);
            $table->string('calle',100);
            $table->char('cp', 6);
            $table->string('colonia',30);
            $table->char('no_interior',3);
            $table->char('no_exterior',3);
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
        Schema::dropIfExists('domicilios');
    }
}
