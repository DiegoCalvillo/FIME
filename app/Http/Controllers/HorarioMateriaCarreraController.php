<?php

namespace FIME\Http\Controllers;

use Illuminate\Http\Request;
use FIME\asignacion_materias_horarios as asignacion_materias_horarios;

class HorarioMateriaCarreraController extends Controller
{
	
    public function index()
    {
    	$asignacion_materias = asignacion_materias_horarios::all();
    	return view('horario_materias_carrera.horarios_materias_carrera')->with('asignacion_materias', $asignacion_materias);
    }
}
