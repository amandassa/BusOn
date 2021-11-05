<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAddTrechoRequest extends FormRequest
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
            'origem' => ['required'],
            'destino' => ['required', 'different:origem'],
            'preço' => ['required', 'numeric', 'min:0.01'],
            'duração' => ['required', 'numeric', 'min:1']
        ];
    }

    // mensagens que aparecem caso as validações não passem
    public function messages()
    {
        return [
            'origem.required' => 'O campo Cidade de origem é obrigatório.',
            'destino.required' => 'O campo Cidade de destino é obrigatório.',
            'destino.different' => 'A Cidade de destino deve ser diferente da Cidade de origem',
            'preço.required' => 'O campo Preço é obrigatório.',
            'preço.numeric' => 'O preço deve conter somente números.',
            'preço.min' => 'O Preço não pode ser menor que 1 centavo.',
            'duração.required' => 'O campo Duração de viagem é obrigatório.',
            'duração.min' => 'A duração de viagem deve ser de no minimo 1 minuto.'
        ];
    }
    
}


