<?php

use Illuminate\Database\Seeder;

class DiasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dias')->insert([
        	'nombre_dia' => 'Sábado',
        	'created_at' => date('Y-m-d H:m:s'),
        	'updated_at' => date('Y-m-d H:m:s'),
        ]);
    }
}
