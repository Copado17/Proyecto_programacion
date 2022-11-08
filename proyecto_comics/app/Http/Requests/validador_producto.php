<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validador_producto extends FormRequest
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
            'Tipo' => 'required |min:3|max:50',
            'Marca' => 'required |min:3|max:50',
            'Precio_compraProducto' => 'required |min:3|max:50',
            'Precio_ventaProducto' => 'required |min:3|max:50',
            'Descripcion' => 'max:50',
            
            
        ];
    }
}
