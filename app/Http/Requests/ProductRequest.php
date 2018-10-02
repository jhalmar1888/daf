<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
     * @return array
     */
    public function rules(Request $request)
    {
        return [
            'Ordenpago'    => 'required',
            'Cheque'        => 'required',
            'Fecha'         => 'required',
            'Objeto'        => 'required',
            'Detalle'       => 'required',
            'DocRespaldo'  => 'required',
            'MontoNumero'         => 'required',
            'MontoLiteral'       => 'required',       
            'Cuenta'        => 'required',

        ];
    }
}
