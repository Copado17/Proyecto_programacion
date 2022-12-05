<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validador_EditarProducto extends FormRequest
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
            'nombre_articulo' => 'required | alpha | max:50',
            'Tipo' => 'required | string | alpha | min:3 | max:255',
            'Marca' => 'required | string | alpha |min:3|max:50',
            'Precio_compraProducto' => 'required | numeric ',
            'Disponibilidad' => 'required | numeric |',
            'Descripcion' => 'max:50  | alpha'
            
        ];
    }
}
