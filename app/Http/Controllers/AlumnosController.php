<?php

namespace FIME\Http\Controllers;

use Illuminate\Http\Request;
use FIME\Http\Requests\AlumnosCreateRequest;
use FIME\Http\Requests\AlumnosEditRequest;
use FIME\alumnos as alumnos;
use FIME\Carrera as Carrera;
use FIME\Estatus as Estatus;
use Auth;

class AlumnosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
    	$alumnos = alumnos::paginate(10);
    	return view('alumnos.alumnos')->with('alumnos', $alumnos);
    }

    public function create()
    {
    	$carrera = Carrera::pluck('nombre_carrera', 'id');
    	return view('alumnos.alumnos_registro')->with('carrera', $carrera);
    }

    public function store(AlumnosCreateRequest $request)
    {
    	$alumnos = new alumnos;
    	$alumnos->nombre_alumno = $request->nombre_alumno;
    	$alumnos->matricula_alumno = $request->matricula_alumno;
    	$alumnos->apellidos_alumno = $request->apellidos_alumno;
    	$alumnos->carreras_id = $request->carrera;
        $alumnos->estatus_id = 1;
        $alumnos->user_id = Auth::User()->id;
    	$alumnos->save();
    	return redirect('/alumnos')->with('message', 'store');
    }

    public function edit($id)
    {
        $alumnos = alumnos::find($id);
        $carrera_alumno_id = $alumnos->carreras_id;
        $estatus_alumno_id = $alumnos->estatus_id;
        $carrera = Carrera::where('id', '!=', $carrera_alumno_id)->get();
        $estatus = Estatus::where('id', '!=', $estatus_alumno_id)->get();
        return view('alumnos.alumnos_editar', compact('alumnos'))->with('carrera', $carrera)->with('estatus', $estatus);
    }

    public function update(Request $request)
    {
        $alumnos = alumnos::find($request->id);
        $alumnos->nombre_alumno = $request->nombre_alumno;
        $alumnos->matricula_alumno = $request->matricula_alumno;
        $alumnos->apellidos_alumno = $request->apellidos_alumno;
        $alumnos->carreras_id = $request->carreras_id;
        $alumnos->estatus_id = $request->estatus_id;
        $alumnos->save();
        return redirect('/alumnos')->with('message', 'edit');
    }

    public function search(Request $request)
    {
        $alumnos = Alumnos::where('matricula_alumno', 'like', '%'.$request-> matricula_alumno.'%')->paginate(1);
        return \View::make('alumnos.alumnos', compact('alumnos'));
    }

    public function show($id)
    {
        $alumnos = alumnos::find($id);
        return view('alumnos.alumnos_perfil')->with('alumnos', $alumnos);
    }
}
