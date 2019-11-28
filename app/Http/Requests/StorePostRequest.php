<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title'     => 'required|unique:posts|min:5',
            'category'  => 'required',
            'body'      => 'required|min:10',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Ingrese el titulo del post',
            'title.unique' => 'Este post ya existe',
            'title.min' => 'El titulo del post debe tener al menos 5 caracteres',
            'category.required' => 'Seleccione una categoría',
            'body.required' => 'Ingrese el contenido del post',
            'body.min' => 'El contenido del post debe tener al menos 10 caracteres',
        ];
    }
}
