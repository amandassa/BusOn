<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class InicialClienteRequest extends FormRequest
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
            'cidade_partida' => 'required',
            'cidade_destino' => 'required',
            'data_partida' => 'required',
            'required_without_all:tipoLinha_op1,tipoLinha_op2'
        ];  
    }

    // mensagens que aparecem caso as validações não passem
    public function messages()
    {
        return [
            'cidade_partida.required' => 'Informe a cidade de partida.',
            'cidade_destino.required' => 'Informe a cidade de chegada.',
            'data_partida.required' => 'Informe a data de partida',
            'required_without_all' => 'Deve haver ao menos um tipo de linha'
        ];
    }
    
}
