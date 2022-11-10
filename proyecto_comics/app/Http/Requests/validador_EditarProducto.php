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
            'Tipo' => 'required |min:3 ',
            'Marca' => 'required |min:3|max:50',
            'Precio_compraProducto' => 'required | numeric | min-digits:2',
            'Precio_ventaProducto' => 'required | numeric | min-digits:2',
            'Descripcion' => 'max:50',
            
            
        ];
    }
}
