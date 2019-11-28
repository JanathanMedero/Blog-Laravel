<?php

namespace App\Http\Requests;

use App\Post;
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
        $slug = $this->route()->parameter('slug');

        $post = Post::where('slug', $slug)->first();

        if ($post) {
            return [
                'title'     => 'required|min:5|unique:posts,title,'.$post->id,
                'category'  => 'required',
                'body'      => 'required|min:10',
            ];
        }

        return [
            'title'     => 'required|min:5|unique:posts',
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
