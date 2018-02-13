<?php

use Illuminate\Database\Seeder;

class TipoMateriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_materias')->insert([
        	'nombre_tipo_materia' => 'Laboratorio',
        	'created_at' => date('Y-m-d H:m:s'),
        	'updated_at' => date('Y-m-d H:m:s'),
        ]);
    }
}
