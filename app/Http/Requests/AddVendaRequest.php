<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class AddVendaRequest extends FormRequest
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
        $preco_linha = $request['preco_linha'];
        
        return [
            'cod_linha' => ['required', 'min:1'],
            'cpf_atual' => ['required'],
            'preco_atual' => "required|numeric|min:$preco_linha",
            'cidade_partida' => 'required',
            'cidade_destino' =>'required'
        ];
    }

    // mensagens que aparecem caso as validações não passem
    public function messages()
    {
        return [
            'cod_linha.required' => 'Escolha uma passagem para vender.',
            'cpf_atual.required' => 'Preencha as informações do comprador.',
            'preco_atual.required' => 'Passagem não foi paga devidamente.',
            'preco_atual.min' => "Passagem não foi paga devidamente. O valor de pelo menos R$ :min deve ser pago.",
            'cidade_partida.required' => 'Insira uma cidade de partida.',
            'cidade_destino.required' => 'Insira uma cidade de destino.',

        ];
    }
    
}


