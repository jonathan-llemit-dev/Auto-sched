<?php

namespace App\Http\Requests;

use App\Models\Coor_info;
use App\Rules\ValidName;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\Rules;

class CoorRegReq extends FormRequest
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
            'street' => ['required', 'max:100', 'min:3'],
            'password' => ['required', 'confirmed', 'regex:/^(?=.*[A-Z]{1,})(?=.*[a-z]{1,})(?=.*[0-9]{1,})(?=.*[~!@#$%^&*()\-_=+{};:,<.>]{1,}).{8,}$/'],
        ];
    }

    public function messages()
    {
        return [
            'coorFName.required' => '',
            'coorFName.max' => '',
            'coorFName.min' => '',
            'coorFName.regex' => '',

            'coorMName.max' => '',
            'coorMName.min' => '',
            'coorMName.regex' => '',

            'coorLName.required' => '',
            'coorLName.max' => '',
            'coorLName.min' => '',
            'coorLName.regex' => '',

            'email.required' => '',
            'email.email' => '',
            'email.max' => '',
            'email.unique' => 'This Email is Already Taken.',

            'contactNumber.required' => '',
            'contactNumber.unique' => 'This Mobile Number is Already Taken.',
            'contactNumber.max' => '',
            'contactNumber.min' => '',
            'contactNumber.regex' => '',

            'regionCode.required' => 'This Field is Required.',
            'cityCode.required' => 'This Field is Required.',
            'barangayCode.required' => 'This Field is Required.',

            'street.required' => '',
            'street.max' => '',
            'street.min' => '',

            'password.required' => '',
            'password.confirmed' => '',
            'password.min' => '',
            'password.regex' => '',
        ];
    }
}
