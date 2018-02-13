<?php

namespace FIME;

use Illuminate\Database\Eloquent\Model;

class Materias_Comunes extends Model
{
    protected $table = 'materias_comunes';
    protected $fillable = ['id', 'nombre_materia', 'creditos', 'estatus_id', 'semestre_materia', 'tipo_materia_id'];

    public function estatus()
    {
    	return $this->belongsTo(estatus::class);
    }

    public function TipoMateria()
    {
        return $this->belongsTo(TipoMateria::class, 'tipo_materia_id');
    }

}
