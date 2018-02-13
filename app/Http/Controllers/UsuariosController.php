<?php

namespace FIME\Http\Controllers;

use Illuminate\Http\Request;
use FIME\Http\Requests\UsuariosCreateRequest;
use FIME\Http\Requests\UsuariosEditRequest;
use FIME\Http\Requests\FotoPerfilRequest;
use Auth;
use FIME\User as User;
use FIME\puesto as puesto;
use FIME\Estatus as Estatus;
use Carbon\Carbon;

class UsuariosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin', ['only' => ['create', 'edit', 'index']]);
    }
    
    public function index()
    {
        $id = Auth::User()->id;
    	$users = User::where('id', '!=', $id)->get();
    	return view('usuarios.usuarios')->with('users', $users);
    }

    public function create()
    {
    	$puestos = puesto::pluck('nombre_puesto', 'id');
    	return view('usuarios.usuarios_registro')->with('puestos', $puestos);
    }

    public function store(UsuariosCreateRequest $request)
    {
        $users = new User;
        $users->name = $request->name;
        $users->matricula = $request->matricula;
        $users->puesto_id = $request->puestos;
        $users->username = $request->username;
        $users->password = bcrypt($request->password);
        $users->estatus_id = 1;
        $url_foto_perfil = 'imagenes/fotos_perfil/Perfil.jpg';
        $users->ruta_foto = $url_foto_perfil;
        $users->save();
        return redirect('/usuarios')->with('message', 'store');
    }

    public function show($id)
    {
        $users = User::find($id);
        $created_at = Carbon::parse($users->created_at);
        $updated_at = Carbon::parse($users->updated_at);
        $last_login = Carbon::parse($users->last_login);
        return view('usuarios.usuarios_perfil')->with('users', $users)->with('last_login', $last_login)->with('created_at', $created_at)->with('updated_at', $updated_at);
    }

    public function edit($id)
    {
        $users = User::find($id);
        $id_puesto = $users->puesto->id;
        $id_estatus = $users->estatus->id;
        $puestos = puesto::where('id', '!=', $id_puesto)->get();
        $estatus = Estatus::where('id', '!=', $id_estatus)->get();
        return view('usuarios.usuarios_editar', compact('users'))->with('puesto', $puestos)->with('estatus', $estatus);
    }

    public function update(UsuariosEditRequest $request)
    {
        $users = User::find($request->id);
        $users->name = $request->name;
        $users->matricula = $request->matricula;
        $users->puesto_id = $request->puesto;
        $users->username = $request->username;
        $users->estatus_id = $request->estatus;
        if($request->password != "") //Verifica si se cambió la contraseña, en dado caso la cambia
        {
           $users->password = bcrypt($request->password);
        }
        $users->save();
        return redirect('/usuarios')->with('message', 'edit');
    }

    public function save(FotoPerfilRequest $request)
    {
        $user_id = Auth::User()->id;
        $users = User::find($request->id);
        $file = $request->file('file');
        $foto_perfil = $file->getClientOriginalName();
        \Storage::disk('local')->put($foto_perfil, \File::get($file));
        $users->ruta_foto = "imagenes/fotos_perfil/".$foto_perfil;
        $users->save();
        return redirect('/usuarios/'.$user_id)->with('message', 'save');
    }   
}
