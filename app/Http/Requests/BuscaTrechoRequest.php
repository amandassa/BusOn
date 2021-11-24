<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BuscaTrechoRequest extends FormRequest
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
            'codigo' => ['exists:trecho,codigo']
            
        ];
    }

    // mensagens que aparecem caso as validações não passem
    public function messages()
    {
        return [
            'codigo.exists' => ['Trecho com Codigo inserido não existe.']
        ];
    }
    
}


