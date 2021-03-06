<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogCategoryCreateRequest extends FormRequest
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
        return ['title' => 'required|string|min:5',
            'parent_id' => 'required|integer|exists:blog_categories,id',
            'slug' => 'max:200',
            'description' => 'string|max:255|min:3'];
    }
}
