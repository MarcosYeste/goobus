<?php

namespace goobus\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SingInValidate extends FormRequest
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
            'nickname' => 'bail|required|min:5|regex:/^\S*$/',
            'user_pass' => 'required|regex:/^[a-zA-Z0-9]{6}\S*$/',
        ];
    }
    public function messages()
{
    return [
        'nickname.required' => 'El Nickname es obligatorio.',
        'nickname.min' => 'El Nickname debe ser de minimo 5 caracteres.',        
        'nickname.regex' => 'El Nickname no puede contener espacios.',
        'user_pass.required' => 'La contraseña  es obligatoria',
        'user_pass.regex' => 'La contraseña  debe ser de minimo 6 caracteres sin espacios',
    ];
}
}
