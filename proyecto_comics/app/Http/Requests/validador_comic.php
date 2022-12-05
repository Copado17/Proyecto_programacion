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
            'nombre_comic' => 'required',
            'edicion' => 'required',
            'disponibilidad' => 'required',
            'publicacion' => 'required',
            'precio_compra' => 'required',
        ];
            
        
    }
}
