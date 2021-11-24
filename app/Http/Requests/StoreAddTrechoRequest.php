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
            'duração1' => ['required', 'numeric', 'integer'],
            'duração2' => ['required', 'numeric', 'integer'],
            'duração3' => ['required', 'numeric', 'integer']
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
            'preço.numeric' => 'O campo Preço deve conter somente números.',
            'preço.min' => 'O Preço não pode ser menor que 1 centavo.',
            'duração1.required' => 'O campo de horas de duração está vazio.',
            'duração2.required' => 'O campo de minutos de duração está vazio.',
            'duração3.required' => 'O campo de segundos de duração está vazio.',
            'duração1.integer' => 'O tempo de duração em horas só pode ter valores inteiros.',
            'duração2.integer' => 'O tempo de duração em minutos só pode ter valores inteiros.',
            'duração3.integer' => 'O tempo de duração em segundos só pode ter valores inteiros.'
        ];
    }
    
}


