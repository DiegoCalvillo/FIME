<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsignacionMateriasHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignacion_materias_horarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('materias_carreras_id');
            $table->integer('horarios_id');
            $table->integer('dias_id');
            $table->integer('profesor_id');
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
        Schema::dropIfExists('asignacion_materias_horarios');
    }
}
