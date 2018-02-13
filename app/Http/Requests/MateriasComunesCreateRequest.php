<?php

namespace FIME\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MateriasComunesCreateRequest extends FormRequest
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
            'nombre_materia' => 'required',
            'creditos' => 'required|numeric',
            'tipomateria' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nombre_materia.required' => 'Debe definirse el Nombre de la Materia',
            'creditos.required' => 'Debe llenar el campo Creditos',
            'creditos.numeric' => 'El Campo Creditos debe contener un numero',
            'tipomateria.required' => 'Debe definir el Tipo de Materia',
        ];
    }
}
