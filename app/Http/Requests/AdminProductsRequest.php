<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminProductsRequest extends FormRequest
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
        $rules = [
            'code'        => 'required|min:3|max:50|unique:products,code',
            'name'        => 'required|min:2|max:50',
            'price'       => 'required|numeric',
            'description' => 'required|min:3',
            'count'       => 'required|numeric|min:0',
        ];


        if ( $this->route()->named('products.update') ) {
            $rules['code'] .= ',' . $this->route()->parameter('product')->id;
        };

        return $rules;
    }

    public function messages()
    {
        return [
            'required'      => 'Поле :attribute обязателен к заполнению',
            'min'           => 'Поле :attribute должени именть минимум :min символа',
            'max'           => 'Поле :attribute может иметь :max символа',
            'numeric'       => 'Введи цену',
            'count.numeric' => 'Поле :attribute  цифровой ввод',
            'unique'        => 'Поле :attribute должен быть уникальным',
        ];
    }

    public function attributes()
    {
        return [
            'code'        => 'Код',
            'name'        => 'Имя',
            'description' => 'Описание',
            'price'       => 'Цена',
            'show'        => 'Отобразить',
            'count'       => 'Количество',
        ];
    }

}
