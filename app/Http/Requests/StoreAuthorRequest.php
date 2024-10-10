<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAuthorRequest extends FormRequest
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
            'fullname' => 'required|string|max:45',
            'birth' => 'date',
        ];
    }

    public function messages()
    {
        return [
            'fullname.required' => 'Fullname is required',
            'fullname.string' => 'Fullname have been string',
            'fullname.max' => 'Fullname is too long',
            'birth.string' => 'Birth have been date',
        ];
    }
}
