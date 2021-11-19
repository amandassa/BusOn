<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
    public function rules()
    {
        return [
            'cod_passagem' => ['required', 'min:1'],
            'cpf_atual' => ['required'],
            'preco_atual' => ['required', 'min:0.01']

        ];
    }

    // mensagens que aparecem caso as validações não passem
    public function messages()
    {
        return [
            'cod_passagem.required' => 'Escolha uma passagem para vender.',
            'cpf_atual.required' => 'Preencha as informações do comprador.',
            'preco_atual.required' => 'Passagem não foi paga devidamente.'
        ];
    }
    
}


