<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class SelecaoRequest extends FormRequest
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
            'cidade_chegada' => 'required',
            'data_partida' => "required"
            
        ];  
    }

    // mensagens que aparecem caso as validações não passem
    public function messages()
    {
        return [
            'cidade_partida.required' => 'Informe a cidade de partida.',
            'cidade_chegada.required' => 'Informe a cidade de chegada.',
            'data_partida.required' => 'Informe a data de partida'

        ];
    }
    
}
