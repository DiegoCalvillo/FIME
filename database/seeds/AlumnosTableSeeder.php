<?php

use Illuminate\Database\Seeder;

class AlumnosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alumnos')->insert([
        	'nombre_alumno' => 'Diego Alberto',
        	'apellidos_alumno' => 'Calvillo Rodriguez',
        	'matricula_alumno' => '1478296',
        	'carreras_id' => 1,
        	'created_at' => date('Y-m-d H:m:s'),
        	'updated_at' => date('Y-m-d H:m:s'),	
        ]);
    }
}
