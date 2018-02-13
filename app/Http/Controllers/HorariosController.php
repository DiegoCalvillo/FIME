<?php

namespace FIME\Http\Controllers;

use Illuminate\Http\Request;
use FIME\Horarios as Horarios;

class HorariosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
   	{
   		$horarios = Horarios::paginate(9);
   		return view('horarios.horarios')->with('horarios', $horarios);
   	}

   	public function search(Request $request)
   	{
   		$horarios = Horarios::where('nombre_horario', 'like', '%'.$request-> nombre_horario.'%')->paginate(1);
   		return \View::make('horarios.horarios', compact('horarios'));
   	}
}
