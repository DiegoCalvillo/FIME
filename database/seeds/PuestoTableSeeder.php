<?php

use Illuminate\Database\Seeder;

class PuestoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('puestos')->insert([
        	'nombre_puesto' => 'Administrador',
        	'created_at' => date('Y-m-d H:m:s'),
        	'updated_at' => date('Y-m-d H:m:s'),	
        ]);
    }
}
