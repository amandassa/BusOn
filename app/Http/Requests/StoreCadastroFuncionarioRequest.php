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
            'nome' => ['required' , new FullName],
            'email' => 'required|email|unique:email',
            'cpf' => 'required|cpf|formato_cpf|unique:cpf',
            'senha' => 'required|min:8|same:confirmacaoSenha',
            'confirmacaoSenha' => 'required|min:8|same:senha',
        ];
    }

    // mensagens que aparecem caso as validações não passem
    public function messages()
    {
        return [
            'name.required' => 'O campo nome deve ser preenchido.',
            'email.required' => 'O campo e-mail é obrigatório.',
            'email.email' => 'Digite um e-mail válido.',
            'email.unique:email' => 'Esse email já foi cadastrado.',
            'cpf.required' => 'O campo cpf é obrigatório.',
            'cpf.cpf' => 'Inclua um cpf válido.',
            'cpf.unique:cpf' => 'Esse cpf já foi cadastrado.',
            'senha.required' => 'O campo senha é obrigatório.',
            'senha.min:8' => 'A senha deve ter no mínimo 8 caracteres.',
            'confirmacaoSenha.required' => 'O campo cconfirmar senha é obrigatório.',
            'confirmacaoSenha.same:aSenha' => 'A confirmação da senha não é igual à senha.',
        ];
    }

}
