<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersRequest extends FormRequest
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
          'email' => 'required|unique:users,email',
          'password' => 'required',
          'role_id' => 'required',
          'is_active' => 'required'
        ];
    }

    public function messages() {
      return [
        'name.required' => 'Please Enter Name',
        'email.required' => 'Please Enter Email',
        'password.required' => 'Password Is Required',
        'role_id.required' => 'Please Select A Role',
        'is_active.required' => 'User Status Is Required',
      ];
    }
}
