<?php

namespace FIME\Http\Controllers;

use Illuminate\Http\Request;
use FIME\Carrera as carrera;

class CarrerasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
    	$carreras = Carrera::paginate(3);
    	return view('carreras.carreras')->with('carreras', $carreras);
    }

    public function search(Request $request)
    {
    	$carreras = Carrera::where('abr_carrera', 'like', '%'.$request-> abr_carrera.'%')->paginate(5);
    	return \View::make('carreras.carreras', compact('carreras')); 
    }

}
