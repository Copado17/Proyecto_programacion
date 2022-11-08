<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validador_comic extends FormRequest
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
            'Titulo' => 'required |min:3|max:50',
            'Compania' => 'required |min:3|max:50',
            'Precio_compra' => 'required |numeric |min:2|max:10000000',
            'Precio_venta' => 'required |numeric |min:2|max:10000000',
            'Edicion' => 'required |numeric ',
            
            
        ];
    }
}
