<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditStaffRequest extends FormRequest
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
          'name' => 'required',
          'position' => 'required',
          'profession' => 'required',
          'date_of_birth' => 'required',
          'years' => 'required',
          'membership' => 'required',
          'task' => 'required',
          'qualifications' => 'required',
          'education' => 'required',
          'emp_record' => 'required',
          'languages' => 'required',
          'nationality' => 'required',
        ];
    }

    public function messages()
    {
        return [
          'name.required' => 'required',
          'position.required' => 'required',
          'profession.required' => 'required',
          'date_of_birth.required' => 'required',
          'years.required' => 'required',
          'membership.required' => 'required',
          'task.required' => 'required',
          'qualifications.required' => 'required',
          'education.required' => 'required',
          'emp_record.required' => 'required',
          'languages.required' => 'required',
          'nationality.required' => 'required',
        ];
    }
}
