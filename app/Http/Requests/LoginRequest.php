<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            
        ];
    }
    
}


