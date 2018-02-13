<?php

namespace FIME\Http\Controllers;

use Illuminate\Http\Request;
use FIME\asignacion_materias_horarios as asignacion_materias_horarios;
use FIME\Http\Requests\AsignacionMateriasHorariosRequest;
use FIME\Carrera as Carrera;
use FIME\Materias_Carrera as Materias_Carrera;
use FIME\Horarios as Horarios;
use FIME\Dias as Dias;
use FIME\Profesores as Profesores;

class AsignacionMateriasHorariosController extends Controller
{
    
    
    public function index()
    {
        $carrera = Carrera::pluck('nombre_carrera', 'id');
        $horarios = Horarios::pluck('nombre_horario', 'id');
        $dias = Dias::pluck('nombre_dia', 'id');
        $profesores = Profesores::where('estatus_id', '=', 1)->pluck('nombre_profesor', 'id');
        return view('asignacion_materias_carrera.asignacion_materias_carrera', compact('carrera'))->with('horarios', $horarios)->with('dias', $dias)->with('profesores', $profesores);	
    }

    public function store(AsignacionMateriasHorariosRequest $request)
    {
        $asignacion_materias_carrera = new  asignacion_materias_horarios;
        $asignacion_materias_carrera->materias_carreras_id = $request->materias;
        $asignacion_materias_carrera->horarios_id = $request->horarios;
        $asignacion_materias_carrera->profesor_id = $request->profesores;
        $asignacion_materias_carrera->dias_id = $request->dias;
        $asignacion_materias_carrera->salon = $request->salon;
        $asignacion_materias_carrera->save();
        return redirect('/horarios_materias');
    }

    public function getmaterias(Request $request, $id)
    {
    	if($request->ajax())
    	{
    		$materias = Materias_Carrera::Materias_Carrera($id);
    		return response()->json($materias);
    	}
    }
}
