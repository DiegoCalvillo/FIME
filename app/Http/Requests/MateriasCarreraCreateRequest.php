<?php

namespace FIME\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MateriasCarreraCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre_materia' => 'required|unique:materias__carreras',
            'creditos' => 'required|numeric',
            'carrera' => 'required',
            'tipomateria' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nombre_materia.required' => 'El Campo Nombre de la Materia es obligatorio',
            'nombre_materia.unique' => 'La Materia ya está registrada',
            'creditos.required' => 'El Campo Créditos es obligario',
            'creditos.numeric' => 'El Campo Créditos solo acepta numeros enteros',
            'carrera.required' => 'Debe seleccionar una Carrera',
            'tipomateria.required' => 'Debe seleccionar un Tipo de Materia',
        ];
    }
}
