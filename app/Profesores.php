<?php

namespace FIME;

use Illuminate\Database\Eloquent\Model;

class Profesores extends Model
{
    protected $table = 'profesores';
    protected $fillable = ['id', 'nombre_profesor', 'apellidos_profesor', 'correo_profesor', 'estatus_id'];

    public function estatus()
    {
    	return $this->belongsTo(estatus::class);
    }
}
