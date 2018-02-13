<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Rutas de FrontController*/
Route::get('/', 'FrontController@index');
Route::get('/tables', 'FrontController@tables');

/*Rutas de CarrerasController*/
Route::resource('/carreras', 'CarrerasController');
Route::post('carreras/search', ['as' => 'carreras/search', 'uses' => 'CarrerasController@search']);

/*Rutas de HorariosController*/
Route::resource('/horarios', 'HorariosController');
Route::post('horarios/search', ['as' => 'horarios/search', 'uses' => 'HorariosController@search']);

/*Rutas de AlumnosController*/
Route::resource('/alumnos', 'AlumnosController');
Route::get('alumnos/create', 'AlumnosController@create');
Route::get('alumnos/{id}/edit', ['as' => 'alumnos/edit', 'uses' => 'AlumnosController@edit']);
Route::put('alumnos/update', ['as' => 'alumnos/update', 'uses' => 'AlumnosController@update']);
Route::post('alumnos/store', 'AlumnosController@store');
Route::post('alumnos/search', ['as' => 'alumnos/search', 'uses' => 'AlumnosController@search']);
Route::get('alumnos/{id}', ['as' => 'alumnos/show', 'uses' => 'AlumnosController@show']);

/*Rutas de MateriasCarrerasController*/
Route::resource('/materias_carreras', 'MateriasCarrerasController');
Route::get('materias_carreras/create', 'MateriasCarrerasController@create');
Route::post('materias_carreras/store', 'MateriasCarrerasController@store');
Route::get('materias_carreras/{id}/edit', ['as' => 'materias_carreras/edit', 'uses' => 'MateriasCarrerasController@edit']);
Route::put('materias_carreras/update', ['as' => 'materias_carreras/update', 'uses' => 'MateriasCarrerasController@update']);
Route::post('materias_carreras/search', ['as' => 'materias_carreras/search', 'uses' => 'MateriasCarrerasController@search']);

/*Rutas de MateriasComunesController*/
Route::resource('/materias_comunes', 'MateriasComunesController');
Route::get('materias_comunes/create', 'MateriasComunesController@create');
Route::post('materias_comunes/store', 'MateriasComunesController@store');
Route::get('materias_comunes/{id}/edit', ['as' => 'materias_comunes/edit', 'uses' => 'MateriasComunesController@edit']);
Route::put('materias_comunes/update', ['as' => 'materias_comunes/update', 'uses' => 'MateriasComunesController@update']);
Route::post('materias_comunes/search', ['as' => 'materias_comunes/search', 'uses' => 'MateriasComunesController@search']);

/*Rutas de ProfesoresController*/
Route::resource('/profesores', 'ProfesoresController');
Route::get('profesores/create', 'ProfesoresController@create');
Route::post('profesores/store', 'ProfesoresController@store');
Route::get('profesores/{id}/edit', ['as' => 'profesores/edit', 'uses' => 'ProfesoresController@edit']);
Route::put('profesores/update', ['as' => 'profesores/update', 'uses' => 'ProfesoresController@update']);
Route::post('profesores/search', ['as' => 'profesores/search', 'uses' => 'ProfesoresController@search']);

/*Rutas de AsignacionMateriasHorariosController*/
Route::resource('/asignacion_materias_carrera', 'AsignacionMateriasHorariosController');
Route::post('asignacion_materias_carrera/store', 'AsignacionMateriasHorariosController@store');
Route::get('materias/{id}', 'AsignacionMateriasHorariosController@getmaterias');

/*Rutas de HorarioMateriaCarreraController*/
Route::resource('/horarios_materias', 'HorarioMateriaCarreraController');

/*Rutas de UsuariosController*/
Route::resource('/usuarios', 'UsuariosController');
Route::get('usurios/create', 'UsuariosController@create');
Route::post('usuarios/cambiar_foto', ['as' => 'usuarios/cambiar_foto', 'uses' => 'UsuariosController@save']);
Route::post('usuarios/store', 'UsuariosController@store');
Route::get('usuarios/{id}/edit', ['as' => 'usuarios/edit', 'uses' => 'UsuariosController@edit']);
Route::put('usuarios/update', ['as' => 'usuarios/update', 'uses' => 'UsuariosController@update']);
Route::get('usuarios/{id}', ['as' => 'usuarios/show', 'uses' => 'UsuariosController@show']);

/*Rutas de LoginController*/
Route::resource('/login', 'LoginController');
Route::post('login/store', 'LoginController@store');
Route::get('logout', 'LoginController@logout');

Auth::routes();
