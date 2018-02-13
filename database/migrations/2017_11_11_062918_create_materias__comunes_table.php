<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriasComunesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materias_comunes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_materia');
            $table->integer('creditos');
            $table->integer('estatus_id');
            $table->integer('semestre_materia');
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
        Schema::dropIfExists('materias__comunes');
    }
}
