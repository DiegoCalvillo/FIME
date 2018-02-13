<?php

namespace FIME\Http\Controllers;

use Illuminate\Http\Request;
use FIME\Http\Requests\MateriasComunesCreateRequest;
use FIME\Materias_Comunes as  Materias_Comunes;
use FIME\TipoMateria as TipoMateria;
use FIME\Estatus as Estatus;

class MateriasComunesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
    	$materias_comunes = Materias_Comunes::paginate(10);
    	return view('materias_comunes.materias_comunes')->with('materias_comunes', $materias_comunes);
    }

    public function create()
    {
    	$tipomateria = TipoMateria::pluck('nombre_tipo_materia', 'id');
    	return view('materias_comunes.materias_comunes_registro')->with('tipomateria', $tipomateria);
    }

    public function store(MateriasComunesCreateRequest $request)
    {
        $materias_comunes = new Materias_Comunes;
        $materias_comunes->nombre_materia = $request->nombre_materia;
        $materias_comunes->tipo_materia_id = $request->tipomateria;
        $materias_comunes->semestre_materia = $request->semestre_materia;
        $materias_comunes->creditos = $request->creditos;
        $materias_comunes->estatus_id = 1;
        $materias_comunes->save();
        return redirect('/materias_comunes')->with('message', 'store');
    }

    public function edit($id)
    {
        $materias_comunes = Materias_Comunes::find($id);
        $tipo_materia = TipoMateria::all();
        $estatus = Estatus::all();
        return view('materias_comunes.materias_comunes_editar', compact('materias_comunes'))->with('materias_comunes', $materias_comunes)->with('tipo_materia', $tipo_materia)->with('estatus', $estatus);
    }

    public function update(Request $request)
    {
        $materias_comunes = Materias_Comunes::find($request->id);
        $materias_comunes->nombre_materia = $request->nombre_materia;
        $materias_comunes->tipo_materia_id = $request->tipo_materia_id;
        $materias_comunes->semestre_materia = $request->semestre_materia;
        $materias_comunes->creditos = $request->creditos;
        $materias_comunes->estatus_id = $request->estatus_id;
        $materias_comunes->save();
        return redirect('/materias_comunes')->with('message', 'edit');
    }

    public function search(Request $request)
    {
        $materias_comunes = Materias_Comunes::where('nombre_materia', 'like', '%'.$request-> nombre_materia.'%')->paginate(5);
        return \View::make('materias_comunes.materias_comunes', compact('materias_comunes')); 
    }
}
