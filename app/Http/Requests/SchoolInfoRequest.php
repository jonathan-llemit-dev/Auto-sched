<?php

namespace App\Http\Requests;

use App\Models\School_info;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SchoolInfoRequest extends FormRequest
{
    /* Determine if the user is authorized to make this request. */

    public function authorize(): bool
    {
        return true;
    }

    /* Get the validation rules that apply to the request.
     @return array<string, \Illuminate\Contracts\Validation\Rule|array|string> */

    public function rules(): array
    {
        return 
        [
            'schName' => ['required', 'max:50', 'min:5', Rule::unique(School_info::class)->ignore($this->user()->id)],
            'regionCode' => ['required'],
            'cityCode' => ['required'],
            'barangayCode' => ['required'],
            'street' => ['nullable', 'max:100', 'min:10'],
            'contactNumber' => ['required', 'max:16', 'min:8', 'regex:/^[\d+\+]*$/', Rule::unique(School_info::class)->ignore($this->user()->id)],
            'email' => ['required', 'email', 'max:40', 'min:5', Rule::unique(School_info::class)->ignore($this->user()->id)],
        ];
    }

    public function messages()
    {
        return 
        [
            'schName.required' => '',
            'schName.max' => '',
            'schName.min' => '',
            'schName.unique' => 'This School Name is Already Taken.',

            'regionCode.required' => 'This Field is Required.',
            'cityCode.required' => 'This Field is Required.',
            'barangayCode.required' => 'This Field is Required.',

            'street.max' => '',
            'street.min' => '',

            'contactNumber.required' => '',
            'contactNumber.max' => '',
            'contactNumber.min' => '',
            'contactNumber.regex' => '',
            'contactNumber.unique' => 'This Mobile Number is Already Taken.',

            'email.required' => '',
            'email.email' => '',
            'email.max' => '',
            'email.min' => '',
            'email.unique' => 'This Email is Already Taken.',
        ];
    }
}