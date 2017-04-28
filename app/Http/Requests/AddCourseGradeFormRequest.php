<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddCourseGradeFormRequest extends FormRequest
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
            'student' => 'bail|required|string', // the student_id as a string
            'course' => 'bail|required|string',  // the course_id as a string
            'grade' => 'bail|required|string',   // the grade [10-100] as a string
        ];
    }
}
