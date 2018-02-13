<?php

namespace FIME;

use Illuminate\Database\Eloquent\Model;

class puesto extends Model
{
    protected $table = 'puestos';

    protected $fillable = ['id', 'nombre_puesto'];
}
