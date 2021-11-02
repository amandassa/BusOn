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
            'email' => 'required',
            'cpf' => 'required|cpf|formato_cpf',
            'senha' => 'required|confirmed',
            'confirmacaoSenha' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo nome deve ser preenchido.',
            'email.required' => 'O campo e-mail é obrigatório.',
            'cpf.required' => 'O campo cpf é obrigatório.',
            'senha.required' => 'O campo senha é obrigatório.',
            'senha.confirmed' => 'A confirmação da senha não é igual à senha.',
            'confirmacaoSenha.required' => 'O campo cconfirmar senha é obrigatório.',
        ];
    }

}
