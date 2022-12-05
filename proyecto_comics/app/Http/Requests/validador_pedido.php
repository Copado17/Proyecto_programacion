<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validador_pedido extends FormRequest
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
            'Proveedor' => 'required|min_digits:1',
            'PedidoID'=> 'required|min_digits:1',
            'NoOrden' => 'required|numeric|min:1'

        ];
    }
}
