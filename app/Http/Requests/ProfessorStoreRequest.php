<?php

namespace App\Http\Requests; 

use App\Models\Prof_info;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ProfessorStoreRequest extends FormRequest
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
        return [
            'profFName' => ['required', 'max:40', 'min:2', 'regex:/^[a-zA-Z ]*$/'],
            'profLName' => ['required', 'max:40', 'min:2', 'regex:/^[a-zA-Z ]*$/'],
            'email' => ['required', 'email', 'max:40', 'min:5', 'unique:'.Prof_info::class],
            'contactNumber' => ['required', 'max:16', 'min:8', 'regex:/^[\d+\+]*$/', 'unique:'.Prof_info::class],
            'profDept' => ['required'],
            'profField' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'profFName.required' => '',
            'profFName.max' => '',
            'profFName.min' => '',
            'profFName.regex' => '',

            // 'profMName.max' => '',
            // 'profMName.min' => '',
            // 'profMName.regex' => '',

            'profLName.required' => '',
            'profLName.max' => '',
            'profLName.min' => '',
            'profLName.regex' => '',

            'email.required' => '',
            'email.email' => '',
            'email.max' => '',
            'email.unique' => 'This Email is Already Taken.',

            'contactNumber.required' => '',
            'contactNumber.unique' => 'This Mobile Number is Already Taken.',
            'contactNumber.max' => '',
            'contactNumber.min' => '',
            'contactNumber.regex' => '',

            'profDept.required' => 'This Field is Required.',
            'profField.required' => 'This Field is Required.',

            // 'regionCode.required' => 'This Field is Required.',
            // 'cityCode.required' => 'This Field is Required.',
            // 'barangayCode.required' => 'This Field is Required.',

            // 'street.required' => '',
            // 'street.max' => '',
            // 'street.min' => '',

            // 'password.required' => '',
            // 'password.confirmed' => '',
            // 'password.min' => '',
            // 'password.regex' => '',
        ];
    }
}
