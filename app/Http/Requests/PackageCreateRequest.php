<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PackageCreateRequest extends FormRequest
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
            'price' => 'required',
            'destination' => 'required',
            'overview' => 'required',
            'description' => 'required',
            'duration' => 'required',
            'depature_date' => 'required',
            'end_date' => 'required',
            'photo' => 'required',
            'package_category_id' => 'required',
        ];
    }

    public function messages() {
      return [
          'name.required' => 'Please Enter Package Name',
          'price.required' => 'Please Enter Package Price',
          'destination.required' => 'Please Enter Package Destination',
          'overview.required' => 'Please Enter Package Overview',
          'description.required' => 'Please Enter Package Description',
          'depature_date.required' => 'Please Enter Package Depature Date',
          'end_date.required' => 'Please Enter Package End Date',
          'photo.required' => 'Please Select An Image',
          'package_category_id.required' => 'Please Select A Category',

      ];
    }
}
