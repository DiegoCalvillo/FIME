<?php

namespace FIME\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfesoresCreateRequest extends FormRequest
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
            'nombre_profesor' => 'required',
            'matricula_profesor' => 'required|numeric|size:7',
            'apellidos_profesor' => 'required',
            'correo_profesor' => 'required|email',
        ];
    }

    public function messages()
    {
        return [
            'nombre_profesor.required' => 'El Campo Nombre es obligatorio',
            'apellidos_profesor.required' => 'El Campo Apellidos es obligatorio',
            'matricula_profesor.required' => 'El Campo Matricula es obligatorio',
            'matricula_profesor.numeric' => 'La Matricula debe contener solo caracteres numericos',
            'matricula_profesor.size' => 'La Matricula debe componerse de 7 digitos',
            'correo_profesor.required' => 'El Campo Correo es obligatorio',
            'correo_profesor.email' => 'Debe estar en formato de E-Mail',
        ];
    }
}
