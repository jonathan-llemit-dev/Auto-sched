<?php

namespace App\Http\Requests;

use App\Models\Administrator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /* Get the validation rules that apply to the request.
    @return array<string, mixed> */

    public function rules()
    {
        return [
            'adminFName' => ['required', 'max:40', 'min:2', 'regex:/^[a-zA-Z ]*$/'],
            'adminMName' => ['nullable', 'max:40', 'min:2', 'regex:/^[a-zA-Z ]*$/'],
            'adminLName' => ['required', 'max:40', 'min:2', 'regex:/^[a-zA-Z ]*$/'],
            'regionCode' => ['required'],
            'cityCode' => ['required'],
            'barangayCode' => ['required'],
            'street' => ['nullable', 'max:100', 'min:10'],
            'contactNumber' => ['required', 'max:16', 'min:8', 'regex:/^[\d+\+]*$/', Rule::unique(Administrator::class)->ignore($this->user()->id)],
            'email' => ['required', 'email', 'max:40', 'min:5', Rule::unique(Administrator::class)->ignore($this->user()->id)],
        ];
    }

    public function messages()
    {
        return 
        [
            'adminFName.required' => '',
            'adminFName.max' => '',
            'adminFName.min' => '',
            'adminFName.regex' => '',

            'adminMName.max' => '',
            'adminMName.min' => '',
            'adminMName.regex' => '',

            'adminLName.required' => '',
            'adminLName.max' => '',
            'adminLName.min' => '',
            'adminLName.regex' => '',

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
