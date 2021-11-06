<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
        $rules [
            'code' => 'required|min:3|max:255',
            'name' => 'required|min:3|max:255',
            'description' => 'required|min:5',
            'price' => 'required|numeric|min:1',
        ];
        if ($this->route()->name('products.store')){
            $rules['code'] .= '|unique:products,code';
        }
        return $rules
    }

    public function messages()
    {
        return [
            'required' => 'Поле :attribute обязательно для ввода',
            'min' => 'Минимальное количество символов в поле :attribute, - :min',
            'description.min' => 'Минимальное количество символов в поле описания, - :min',
            'code.min' => 'Минимальное количество символов в поле код, - :min',
            'min' => 'Минимальная цена равна, - :min',
        ];
    }
}
