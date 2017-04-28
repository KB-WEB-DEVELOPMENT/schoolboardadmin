<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserFormRequest extends FormRequest
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
            'first_name' => 'bail|required|alpha||min:3|max:50',
            'last_name' => 'bail|required|alpha_num||min:3|max:50|unique:users, last_name',
            'role' => 'bail|required|in:student,admin',
            'email' => 'bail|required|email|max:255|unique:users, email',
        ];
    }
}
