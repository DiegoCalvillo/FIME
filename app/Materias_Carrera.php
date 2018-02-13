<?php

namespace FIME;

use Illuminate\Database\Eloquent\Model;

class Materias_Carrera extends Model
{
    protected $table = 'materias__carreras';
    protected $fillable = ['id', 'nombre_materia', 'creditos', 'carrera_id', 'tipo_materia_id', 'estatus_id'];

    public function estatus()
    {
    	return $this->belongsTo(estatus::class);
    }

    public function carrera()
    {
    	return $this->belongsTo(carrera::class);
    }

    public function TipoMateria()
    {
        return $this->belongsTo(TipoMateria::class, 'tipo_materia_id');
    }

    public static function Materias_Carrera($id)
    {
        return Materias_Carrera::where('carrera_id', '=', $id)->get();
    }
}
