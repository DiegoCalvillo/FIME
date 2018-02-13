<?php

namespace FIME;

use Illuminate\Database\Eloquent\Model;

class alumnos extends Model
{
    protected $table = 'alumnos';
    protected $fillable = ['id', 'nombre_alumno', 'matricula_alumno', 'carreras_id', 'apellidos_alumno', 'estatus_id'];

    public function carrera()
    {
    	return $this->belongsTo(carrera::class, 'carreras_id');
    }

    public function estatus()
    {
    	return $this->belongsTo(estatus::class);
    }

}
