<?php

namespace FIME\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlumnosCreateRequest extends FormRequest
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
            'nombre_alumno' => 'required',
            'matricula_alumno' => 'required|unique:alumnos',
            'matricula_alumno' => 'size:7',
            'matricula_alumno' => 'numeric',
            'apellidos_alumno' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nombre_alumno.required' => 'El Campo Nombre no puede estar vacío',
            'matricula_alumno.required' => 'El Campo Matrícula no puede estar vacío',
            'apellidos_alumno.required' => 'El Campo Apellidos no puede estar vacío',
            'matricula_alumno.unique' => 'Ya hay un alumno con esta Matrícula',
            'matricula_alumno.size' => 'La Matrícula debe componerse de 7 digitos',
            'matricula_alumno.numeric' => 'La Matrícula debe contener solo caracteres numéricos',
        ];
    }
}
