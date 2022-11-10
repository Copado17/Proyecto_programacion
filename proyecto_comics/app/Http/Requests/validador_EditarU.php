<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validador_EditarU extends FormRequest
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
            'Nombre' => 'required',
            'Nombre_usuario'=> 'required|min:3|max:20',
            'Password' => 'required|min:8|max:20'

        ];
    }
}
