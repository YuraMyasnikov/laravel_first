<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConfirmedOrderRequest extends FormRequest
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
            'name'  => 'required|min:2',
            'phone' => 'required|numeric',
        ];
    }

    public function attributes()
    {
        return [
            'name'  => 'Имя',
            'phone' => 'Телефон',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Поле :attribute обязательно к заполнению',
            'min'      => 'Поле :attribute минимум :min символа',
            'numeric'  => 'У поля :attribute  формат [0-9]',
        ];
    }
}
