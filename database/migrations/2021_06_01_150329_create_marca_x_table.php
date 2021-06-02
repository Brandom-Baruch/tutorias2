<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarcaXTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marca_x', function (Blueprint $table) {
                        $table->increments('id');
            $table->integer('entrevista_id')->unsigned();
            $table->foreign('entrevista_id')->references('id')->on('entrevista_fresca_padres');
            $table->string('r1',3);
            $table->string('r1_2',5);
            $table->string('r1_3',50);
            $table->string('r2',3);
            $table->string('r2_2',5);
            $table->string('r2_3',50);
            $table->string('r3',3);
            $table->string('r3_2',5);
            $table->string('r3_3',50);
            $table->string('r4',3);
            $table->string('r4_2',5);
            $table->string('r4_3',50);
            $table->string('r5',3);
            $table->string('r5_2',5);
            $table->string('r5_3',50);
            $table->string('r6',3);
            $table->string('r6_2',5);
            $table->string('r6_3',50);
            $table->string('r7',3);
            $table->string('r7_2',5);
            $table->string('r7_3',50);
            $table->string('r8',3);
            $table->string('r8_2',5);
            $table->string('r8_3',50);
            $table->string('r9',3);
            $table->string('r9_2',5);
            $table->string('r9_3',50);
            $table->string('r10',3);
            $table->string('r10_2',5);
            $table->string('r10_3',50);            
            $table->string('r11',3);
            $table->string('r11_2',5);
            $table->string('r11_3',50);
            $table->string('r12',3);
            $table->string('r12_2',5);
            $table->string('r12_3',50);
            $table->string('r13',3);
            $table->string('r13_2',5);
            $table->string('r13_3',50);
            $table->string('r14',3);
            $table->string('r14_2',5);
            $table->string('r14_3',50);
            $table->string('r15',3);
            $table->string('r15_2',5);
            $table->string('r15_3',50);
            $table->string('r16',3);
            $table->string('r16_2',5);
            $table->string('r16_3',50);
            $table->string('r17',3);
            $table->string('r17_2',5);
            $table->string('r17_3',50);
            $table->string('r18',3);
            $table->string('r18_2',5);
            $table->string('r18_3',50);
            $table->string('r19',3);
            $table->string('r19_2',5);
            $table->string('r19_3',50);
            $table->string('r20',3);
            $table->string('r20_2',5);
            $table->string('r20_3',50);
            $table->string('r21',3);
            $table->string('r21_2',5);
            $table->string('r21_3',50);
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
        Schema::dropIfExists('marca_x');
    }
}
