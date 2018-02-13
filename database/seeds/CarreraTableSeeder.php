<?php

use Illuminate\Database\Seeder;

class CarreraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carreras')->insert([
        	'abr_carrera' => 'ITS',
        	'nombre_carrera' => 'Ingeniero en Tecnología de Software',
        	'created_at' => date('Y-m-d H:m:s'),
        	'updated_at' => date('Y-m-d H:m:s'),
        ]);
    }
}
