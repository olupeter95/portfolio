<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
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
            'title' => ['required', 'max:256'],
            'description' => ['required'],
            'profile_photo' => ['max:2048']
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'this field is required',
            'description.required' => 'this field is required',
            'profile_photo.max' => 'file cannot exceed 2mb',
        ];
    }
}
