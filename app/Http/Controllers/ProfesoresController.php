<?php

namespace FIME\Http\Controllers;

use Illuminate\Http\Request;
use FIME\Http\Requests\ProfesoresCreateRequest;
use FIME\Profesores as Profesores;
use FIME\Estatus as Estatus;

class ProfesoresController extends Controller
{
 
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$profesores = Profesores::paginate(10);
    	return view('profesores.profesores')->with('profesores', $profesores);
    }

    public function create()
    {
    	return view('profesores.profesores_registro');
    }

    public function store(ProfesoresCreateRequest $request)
    {
    	$profesores = new Profesores;
    	$profesores->nombre_profesor = $request->nombre_profesor;
    	$profesores->apellidos_profesor = $request->apellidos_profesor;
    	$profesores->correo_profesor = $request->correo_profesor;
    	$profesores->matricula_profesor = $request->matricula_profesor;
    	$profesores->estatus_id = 1;
    	$profesores->save();
    	return redirect('/profesores')->with('message', 'store');
    }

    public function edit($id)
    {
    	$profesores = Profesores::find($id);
        $estatus_profesor_id = $profesores->estatus_id;
    	$estatus = Estatus::where('id', '!=', $estatus_profesor_id)->get();
    	return view('profesores.profesores_editar', compact('profesores'))->with('estatus', $estatus);
    }

    public function update(Request $request)
    {
        $profesores = Profesores::find($request->id);
        $profesores->estatus_id = $request->estatus_id;
        $profesores->save();
        return redirect ('/profesores')->with('message', 'edit');
    }

    public function search(Request $request)
    {
        $profesores = Profesores::where('nombre_profesor', 'like', '%'.$request-> nombre_profesor.'%')->get();
        return \View::make('profesores.profesores', compact('profesores'));
    }
}
