<?php

namespace FIME\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AsignacionMateriasHorariosRequest extends FormRequest
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
            'salon' => 'required|size:4|numeric'
        ];
    }

    public function messages()
    {
        return [
            'salon.required' => 'El Campo Salón no puede estar vacío',
            'salon.size' => 'Deben ser 4 digitos en la numeración del salón',
            'salon.numeric' => 'El Campo Salón debe contener caracteres numericos',
        ];
    }
}
