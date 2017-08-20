<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookTourRequest extends FormRequest
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
            'contact_number' => 'required',
            'postal_address' => 'required',
            'country_id' => 'required',
            'passport_info' => 'required',
            'package_id' => 'required',
        ];
    }

    public function messages() {
      return [
        'name.required' => 'Please Enter Full Name',
        'email.required' => 'An Email Is Required',
        'contact_number.required' => 'Contact Number Is Required',
        'postal_address.required' => 'Postal Address is Required',
        'country_id.required' => 'Please select Your Country',
        'passport_info.required' => 'Passport Number Is Required',
        'package_id.required' => 'No package is selected',
      ];
    }
}
