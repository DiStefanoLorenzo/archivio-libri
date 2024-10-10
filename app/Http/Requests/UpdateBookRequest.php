<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBookRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|string|max:45',
            'description' => 'string|max:800',
            'pages' => 'required|integer|min:0',
            'category_id' => 'required',
            'author_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Title is required',
            'title.string' => 'Title have been string',
            'title.max' => 'Title is too long',
            'description.required' => 'Description is required',
            'description.string' => 'Description have been string',
            'description.max' => 'Description is too long',
        ];
    }
}
