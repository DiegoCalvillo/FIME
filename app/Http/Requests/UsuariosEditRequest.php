<?php

namespace FIME\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuariosEditRequest extends FormRequest
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
            'username' => 'required',
            'password2' => 'same:password',
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'El campo Nombre de Usuario es obligatorio',
            'password2.same' => 'La Contraseña debe coincidir con la confirmación de contraseña',
        ];
    }
}
