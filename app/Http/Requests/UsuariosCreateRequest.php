<?php

namespace FIME\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuariosCreateRequest extends FormRequest
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
            'name' => 'required',
            'puestos' => 'required',
            'matricula' => 'required|unique:users',
            'matricula' => 'size:7',
            'matricula' => 'numeric',
            'username' => 'required|unique:users',
            'password' => 'required',
            'password' => 'min:6',
            'password2' => 'required',
            'password2' => 'same:password',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El campo Nombre es obligatorio',
            'puestos.required' => 'El campo Rol es obligatorio',
            'matricula.required' => 'El Campo Matricula es obligatorio',
            'matricula.size' => 'La Matricula debe componerse de 7 digitos',
            'matricula.numeric' => 'La Matrícula debe contener solo caracteres numéricos',
            'username.required' => 'El campo Nombre de Usuario es obligatorio',
            'username.unique' => 'Este Nombre de Usuario ya esta en uso',
            'password.required' => 'Debes ingresar contraseña',
            'password2.required' => 'Debes confirmar la contraseña',
            'password.min' => 'La Contraseña debe contener minimo 6 caracteres',
            'password2.same' => 'La Contraseña debe coincidir con la confirmación de contraseña',
        ];
    }
}
