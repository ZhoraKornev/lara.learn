<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogPostUpdateRequest extends FormRequest
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
            'category_id' => 'required|integer|exists:blog_categories,id',
            'slug' => 'required|string|max:200',
            'content_raw' => 'required|string|min:5|max:10000',
            'excerpt' => 'max:500',
        ];
    }
}
