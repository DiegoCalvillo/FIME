<?php

namespace FIME;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    protected $table = 'carreras';

    protected $fillable = ['abr_carrera', 'nombre_carrera'];
}
