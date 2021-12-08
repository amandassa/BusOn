<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAlteracaoDadosRequest extends FormRequest
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
        if(auth('funcionario')->user()){
            $tabela = 'funcionario';
        }else{
            $tabela = 'cliente';
        }
        return [
            'email' => 'unique:'.$tabela.',email,'.auth()->user()->email.',email'
            //'email' => \Illuminate\Validation\Rule::unique("$tabela")->ignore(auth()->user()->id)

        ];
    }

    // mensagens que aparecem caso as validações não passem
    public function messages()
    {
        return [
            'email.unique' => 'Email já utilizado na base de dados!'
        ];
    }
    
}
