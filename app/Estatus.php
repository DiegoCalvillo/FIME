<?php

namespace FIME;

use Illuminate\Database\Eloquent\Model;

class Estatus extends Model
{
    protected $table = 'estatus';
    protected $fillable = ['id', 'nombre_estatus'];
}
