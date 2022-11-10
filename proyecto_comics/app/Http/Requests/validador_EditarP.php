<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validador_EditarP extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'Empresa' => 'required| min:3 | max:50',
            'Direccion' => 'required | min:3 | max:50',
            'Contacto' => 'required | min:3 | max:50',
            'Telefono_Fijo' => 'required | numeric | digits:8',
            'Telefono_Celular' => 'required | numeric | digits:10',
            'Correo' => 'required | email | max:50',
            
            
        ];
    }
}
