<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFilterRequest extends FormRequest
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
            'price_from' => 'nullable|numeric',
            'price_to' => 'nullable|numeric',
        ];
    }

    public function attributes()
    {
        return [
            'price_from' => 'Цена от',
            'price_to' => 'Цена до',
        ];
    }

    public  function messages()
    {
        return [
            'numeric' => ':attribute - ввод [0-9]'
        ];
    }
}
