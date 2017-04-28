<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCourseFormRequest extends FormRequest
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
            'title' => 'bail|required|alpha|min:3|max:50',
            'course_number' => 'bail|required|integer|unique',
            'description' => 'bail|required|unique|min:3|max:200',
            'availability' => 'bail|required|in:available,unavailable',
        ];
    }
}
