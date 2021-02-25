<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubscribeMessageProduct extends FormRequest
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
            'email' => 'required|email'
        ];
    }

    public function attributes()
    {
        return [
            'email' => 'Email'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Поле :attribute обязателен для заполнении',
            'email' => 'Поле :attribute вид example@mail.ru',
        ];
    }
}
