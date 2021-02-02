<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'phone' => 'required|max:4'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'заполни поле Name',
            'phone.required' => 'заполни полe Phone',
            'name.min' => 'name поле минимум 2 символа',
            'phone.max' => 'phone поле максимум 4 символа'
        ];
    }
}
