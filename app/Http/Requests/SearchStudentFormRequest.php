<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SearchStudentFormRequest extends FormRequest
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
            'first_name' => 'bail|alpha|min:3|max:50',
            'last_name' => 'bail||required|alpha_num|min:3|max:50',
        ];
    }
}
