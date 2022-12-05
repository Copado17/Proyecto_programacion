<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validador_proveedores extends FormRequest
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
            'nombre_proveedor' => 'required| min:3 | max:50',
            'direccion' => 'required | min:3 | max:50',
            'contacto' => 'required | min:6 | max:50',
            'pais' => 'required | min:3 | max:50 |alpha',
            'numero_fijo' => 'required | numeric | digits:8',
            'numero_celular' => 'required | numeric | digits:10',
            'correo' => 'required | email | max:50',
            
            
        ];
    }
}
