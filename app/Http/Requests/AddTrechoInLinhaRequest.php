<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddTrechoInLinhaRequest extends FormRequest
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
            'checked' => ['required']
        ];
    }

    // mensagens que aparecem caso as validações não passem
    public function messages()
    {
        return [
            'checked.required' => 'Selecione ao menos 1 trecho.'
        ];
    }
    
}


