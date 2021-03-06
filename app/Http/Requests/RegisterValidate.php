<?php

namespace goobus\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterValidate extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
   // protected $redirectRoute = 'register';
    
    
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
            'nickname' => 'bail|required|min:3|max:20|regex:/^\S*$/',
            'email' => 'required|email',
            'user_pass' => 'required|regex:/^[a-zA-Z0-9]{6}\S*$/',
        ];
    }
    
    public function messages()
    {
        return [
            'nickname.required' => 'El Nickname es obligatorio.',
            'nickname.min' => 'El Nickname debe ser de minimo 3 caracteres.',  
            'nickname.max' => 'El Nickname debe ser de máximo 20 caracteres.',   
            'nickname.regex' => 'El Nickname no puede contener espacios.',
            'email.required' => 'El email es obligatorio',
            'email.email' => 'El formato del email es incorrecto',
            'user_pass.required' => 'La contraseña  es obligatoria',
            'user_pass.regex' => 'La contraseña  debe ser de minimo 6 caracteres sin espacios',
        ];
    }
}
