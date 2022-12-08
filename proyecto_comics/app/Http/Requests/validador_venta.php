<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validador_venta extends FormRequest
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
            'NombreCliente' => 'required',
            'TelefonoCliente' => 'required|min_digits:8',
            'CorreoCliente' => 'email',
            'idVendedor' => 'required|numeric',
        ];
    }
}