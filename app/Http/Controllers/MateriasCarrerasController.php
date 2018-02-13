<?php

namespace FIME\Http\Controllers;

use Illuminate\Http\Request;
use FIME\Http\Requests\MateriasCarreraCreateRequest;
use FIME\Materias_Carrera as Materias_Carrera;
use FIME\Carrera as Carrera;
use FIME\TipoMateria as TipoMateria;
use FIME\Estatus as Estatus;

class MateriasCarrerasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
    	$materias_carreras = Materias_Carrera::paginate(10);
        $carrera = Carrera::all();
    	return view('materias_carreras.materias_carreras')->with('materias_carreras', $materias_carreras)->with('carrera', $carrera);
    }

    public function create()
    {
    	$carrera = Carrera::pluck('nombre_carrera', 'id');
    	$tipomateria = TipoMateria::pluck('nombre_tipo_materia', 'id');
    	return view('materias_carreras.materias_carreras_registro')->with('carrera', $carrera)->with('tipomateria', $tipomateria);
    }

    public function store(MateriasCarreraCreateRequest $request)
    {
    	$materias_carreras = new Materias_Carrera;
    	$materias_carreras->nombre_materia = $request->nombre_materia;
    	$materias_carreras->semestre_materia = $request->semestre_materia;
    	$materias_carreras->tipo_materia_id = $request->tipomateria;
    	$materias_carreras->creditos = $request->creditos;
    	$materias_carreras->carrera_id = $request->carrera;
    	$materias_carreras->estatus_id = 1;
    	$materias_carreras->save();
    	return redirect('/materias_carreras')->with('message', 'store');
    }

    public function edit($id)
    {
        $materias_carreras = Materias_Carrera::find($id);
        $tipomateria = TipoMateria::all();
        $carrera = Carrera::all();
        $estatus = Estatus::all();
        return view('materias_carreras.materias_carreras_editar', compact('materias_carreras'))->with('tipomateria', $tipomateria)->with('carrera', $carrera)->with('estatus', $estatus);
    }

    public function update(Request $request)
    {
        $materias_carreras = Materias_Carrera::find($request->id);
        $materias_carreras->nombre_materia = $request->nombre_materia;
        $materias_carreras->semestre_materia = $request->semestre_materia;
        $materias_carreras->tipo_materia_id = $request->tipo_materia_id;
        $materias_carreras->creditos = $request->creditos;
        $materias_carreras->carrera_id = $request->carrera_id;
        $materias_carreras->estatus_id = $request->estatus_id;
        $materias_carreras->save();
        return redirect('/materias_carreras')->with('message', 'edit');
    }

    public function search(Request $request)
    {
        $carrera = Carrera::all();
        $materias_carreras = Materias_Carrera::where('carrera_id', '=', $request-> carrera_id)->paginate(40);
        return \View::make('materias_carreras.materias_carreras', compact('materias_carreras'))->with('carrera', $carrera);
    }
}
