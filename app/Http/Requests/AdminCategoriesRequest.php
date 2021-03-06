<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminCategoriesRequest extends FormRequest
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
            'code'          => 'required|min:3|max:30|unique:categories,code',
            'name'          => 'required|min:2|max:50',
            'description'   => 'required|min:3',
        ];

        if($this->route()->named('categories.update'))
        {
            $rules['code'] .= ',' . $this->route()->parameter('category')->id;
        }

        return $rules;
    }

    public function messages()
    {
       return [
           'required' => 'Поле :attribute обязателен к заполнению',
           'min' => 'Поле :attribute должени именть минимум :min символа',
           'max' => 'Поле :attribute может иметь :max символа',
           'unique' => 'Поле :attribute должен быть уникальным'
       ];
    }

    public function attributes()
    {
        return [
            'code'          => 'Код',
            'name'          => 'Имя',
            'description'   => 'Описание',
        ];
    }
}
