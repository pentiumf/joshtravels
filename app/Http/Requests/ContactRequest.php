<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
          'email' => 'required',
          'contact' => 'required',
          'message' => 'required',
        ];
    }

    public function messages()
    {
        return [
          'name.required' => 'name is required',
          'email.required' => 'email is required',
          'contact.required' => 'contact is required',
          'message.required' => 'message is required',
        ];
    }
}
