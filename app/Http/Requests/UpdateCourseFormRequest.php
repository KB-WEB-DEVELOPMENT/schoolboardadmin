<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCourseFormRequest extends FormRequest
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
        // leveraging unique:users, email. We don't want to send an Invite to a User that already exists.
        return [
            'description' => 'bail|required|unique|min:3|max:200',
            'availability' => 'bail|required|in:available,unavailable',
        ];
    }
}
