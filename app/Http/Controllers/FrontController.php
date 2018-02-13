<?php

namespace FIME\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	return view('inicio');
    }

    public function tables()
    {
    	return view('tables');
    }
}
