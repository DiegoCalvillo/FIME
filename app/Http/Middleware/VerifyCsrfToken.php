<?php

namespace FIME\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'carreras/search',
        'alumnos/store',
        'alumnos/search',
        'materias_carreras/store',
        'materias_carreras/search',
        'materias_comunes/store',
        'profesores/store',
        'profesores/search',
        'horarios/search',
        'asignacion_materias_carrera/store',
        'usuarios/store',
        'login/store',
        'usuarios/cambiar_foto',
    ];
}
