<?php

namespace App\Http\Requests;

use App\Rules\ValidName;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\Rules;

class AdminRegReq extends FormRequest
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
            'coorFName' => ['required', 'max:40', 'min:2', 'regex:/^[a-zA-Z ]*$/'],
            'coorMName' => ['nullable', 'max:40', 'min:2', 'regex:/^[a-zA-Z ]*$/'],
            'coorLName' => ['required', 'max:40', 'min:2', 'regex:/^[a-zA-Z ]*$/'],
            'email' => ['required', 'email', 'max:40'],
            'contactNumber' => ['required', 'regex:/^[\d+\+]*$/', 'max:16', 'min:8'],
            'regionCode' => ['required'],
            'cityCode' => ['required'],
            'barangayCode' => ['required'],
            'street' => ['nullable', 'max:100', 'min:3'],
            'password' => ['required', 'confirmed', 'regex:/^(?=.*[A-Z]{1,})(?=.*[a-z]{1,})(?=.*[0-9]{1,})(?=.*[~!@#$%^&*()\-_=+{};:,<.>]{1,}).{8,}$/'],
        ];
    }

    public function messages()
    {
        return [
            'coorFName.required' => 'This Field is Required.',
            'coorFName.max' => 'This Field is Maximum of 40 Characters Only.',
            'coorFName.min' => 'This Field Should have Atleast 2 Characters Long.',
            'coorFName.regex' => 'This Field Should have Letters and Spaces Only.',

            'coorMName.max' => 'This Field is Maximum of 40 Characters Only.',
            'coorMName.min' => 'This Field Should have Atleast 2 Characters Long.',
            'coorMName.regex' => 'This Field Should have Letters and Spaces Only.',

            'coorLName.required' => 'This Field is Required.',
            'coorLName.max' => 'This Field is Maximum of 40 Characters Only.',
            'coorLName.min' => 'This Field Should have Atleast 2 Characters Long.',
            'coorLName.regex' => 'This Field Should have Letters and Spaces Only.',

            'email.required' => 'This Field is Required.',
            'email.email' => 'Invalid Email.',
            'email.max' => 'This Field is Maximum of 40 Characters Only.',
            'email.unique' => 'This Email is Already Taken.',

            'contactNumber.required' => 'This Field is Required.',
            'contactNumber.unique' => 'This Contact Number is Already Taken.',
            'contactNumber.max' => 'This Field is Maximum of 40 Characters Only.',
            'contactNumber.min' => 'This Field Should have Atleast 2 Characters Long.',
            'contactNumber.regex' => 'This Field Should have Numbers Only.',

            'regionCode.required' => 'This Field is Required.',
            'cityCode.required' => 'This Field is Required.',
            'barangayCode.required' => 'This Field is Required.',

            'street.max' => 'This Field is Maximum of 40 Characters Only.',
            'street.min' => 'This Field Should have Atleast 2 Characters Long.',

            'password.required' => 'This Field is Required.',
            'password.confirmed' => '',
            'password.min' => '',
            'password.regex' => '',
        ];
    }
}
