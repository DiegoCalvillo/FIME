<?php

namespace FIME;

use Illuminate\Database\Eloquent\Model;

class TipoMateria extends Model
{
    protected $table = 'tipo_materias';
    protected $fillable = ['id', 'nombre_tipo_materia'];
}
