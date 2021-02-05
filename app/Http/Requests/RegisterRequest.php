<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required|min:2|max:10',
            'email' => 'required|email',
            'password' => 'required|min:4'
        ];
    }

    public function attributes()
    {
     return[
         'name' => "Имя",
         'email' => 'E-mail',
         'password' => 'Пароль'
     ];
    }

    public function messages()
    {
        return[
            'name.required' => 'Нужно обязательно указать имя',
            'name.min' => 'Выдави побольше букв',
            'name.max' => 'Не фантазируй, или сделай альтернативное имя',
            'email.required'    =>  'Поле E-mail обязательно к заполнению',
            'email.email'       =>  'Поле E-mail должно быть в формате example@gmail.com',
            'password.required'    =>  'Поле Password обязательно к заполнению',
            'password.min'    =>  'Придумай пароль хотябы из 4 символов',
        ];

    }
}
