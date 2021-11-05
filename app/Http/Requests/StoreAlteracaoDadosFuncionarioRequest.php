<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAlteracaoDadosFuncionarioRequest extends FormRequest
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
            'entradaNome' => ['required_without_all:entradaEmail,entradaSenha', new FullName],
            'entradaEmail' => ['required_without_all:entradaNome,entradaSenha', 'email', 'unique:email'],
            'entradaSenha' => ['required_without_all:entradaNome,entradaEmail', 'min:8'],
            'entradaConfirmarSenha' => ['min:8', 'same:entradaSenha'],
        ];
    }

    // mensagens que aparecem caso as validações não passem
    public function messages()
    {
        return [
            'entradaNome.required' => 'O campo nome é obrigatório.',
            'entradaEmail.required' => 'O campo e-mail é obrigatório.',
            'entradaEmail.email' => 'Digite um e-mail válido.',
            'entradaSenha.min' => 'A senha deve ter no mínimo 8 caracteres.',
            'entradaConfirmarSenha.same' => 'Senha não confirmada.'
        ];
    }
    
}
