<?php

use Illuminate\Database\Seeder;

class MateriasCarrerasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materias__carreras')->insert([
        	'nombre_materia' => 'Lenguajes de Programación',
        	'creditos' => 3,
        	'carrera_id' => 1,
        	'tipo_materia_id' => 1,
        	'created_at' => date('Y-m-d H:m:s'),
        	'updated_at' => date('Y-m-d H:m:s'),
        ]);
    }
}
