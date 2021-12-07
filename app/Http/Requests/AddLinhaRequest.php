<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddLinhaRequest extends FormRequest
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
            'hora_partida' => ['required'],
            'total_vagas' => ['required', 'min:0', 'integer'],
            'segunda' => ['required_without_all:terça,quarta,quinta,sexta,sábado, domingo'],
            'terça' => ['required_without_all:segunda,quarta,quinta,sexta,sábado, domingo'],
            'quarta' => ['required_without_all:terça,segunda,quinta,sexta,sábado, domingo'],
            'quinta' => ['required_without_all:terça,quarta,segunda,sexta,sábado, domingo'],
            'sexta' => ['required_without_all:terça,quarta,quinta,segunda,sábado, domingo'],
            'sábado' => ['required_without_all:terça,quarta,quinta,sexta,segunda, domingo'],
            'domingo' => ['required_without_all:terça,quarta,quinta,sexta,sábado, segunda']
        ];
    }

    // mensagens que aparecem caso as validações não passem
    public function messages()
    {
        return [
            'hora_partida.required' => 'O campo Hora de partida é obrigatório.',
            'total_vagas.required' =>  'O campo Número de assentos é obrigatório.',
            'required_without_all' => 'Deve haver ao menos um Dia disponível para a linha.'
        ];
    }
    
}


