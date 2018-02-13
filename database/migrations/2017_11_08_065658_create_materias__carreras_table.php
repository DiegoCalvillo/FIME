<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriasCarrerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materias__carreras', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_materia');
            $table->integer('creditos');
            $table->integer('carrera_id');
            $table->integer('tipo_materia_id');
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
        Schema::dropIfExists('materias__carreras');
    }
}
