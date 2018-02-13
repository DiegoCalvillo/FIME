<?php

namespace FIME;

use Illuminate\Database\Eloquent\Model;

class asignacion_materias_horarios extends Model
{
    protected $table = 'asignacion_materias_horarios';

    protected $fillable = ['materias_carreras_id', 'horarios_id', 'dias_id', 'profesor_id'];

    public function Materias_Carrera()
    {
    	return $this->belongsTo(Materias_Carrera::class, 'materias_carreras_id');
    }

    public function Horarios()
    {
    	return $this->belongsTo(Horarios::class);
    }

    public function Dias()
    {
    	return $this->belongsTo(Dias::class);
    }

    public function Profesores()
    {
    	return $this->belongsTo(Profesores::class, 'profesor_id');
    }
}
