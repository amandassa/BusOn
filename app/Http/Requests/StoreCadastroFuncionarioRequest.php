<?php

namespace App\Http\Requests;

use App\Rules\FullName;
use Illuminate\Foundation\Http\FormRequest;

class StoreCadastroFuncionarioRequest extends FormRequest
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
            'cpf' => ['required', 'size:11', 'unique:funcionario,cpf'],
            'nome' => ['required'],
            'email' => ['required', 'email', 'unique:funcionario,email'],            
            'senha' => ['required', 'min:6'],
            'confirmacaoSenha' => ['required', 'same:senha']
        ];
    }

    // mensagens que aparecem caso as validações não passem
    public function messages()
    {
        return [
            'nome.required' => 'O campo nome é obrigatório.',
            'email.required' => 'O campo e-mail é obrigatório.',
            'email.email' => 'Digite um e-mail válido.',
            'email.unique' => 'Esse email já foi cadastrado.',
            'cpf.required' => 'O campo cpf é obrigatório.',
            'cpf.cpf' => 'Inclua um cpf válido.',
            'senha.required' => 'O campo senha é obrigatório.',
            'senha.min:8' => 'A senha deve ter no mínimo 8 caracteres.',
            'confirmacaoSenha.required' => 'O campo confirmar senha é obrigatório.',
            'confirmacaoSenha.same' => 'A confirmação da senha não é igual à senha.',
        ];
    }

}
