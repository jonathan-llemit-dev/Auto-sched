<?php

namespace App\Http\Requests;

use App\Models\Prof_info;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'profFName' => ['required', 'max:40', 'min:2', 'regex:/^[a-zA-Z ]*$/'],
            'profLName' => ['required', 'max:40', 'min:2', 'regex:/^[a-zA-Z ]*$/'],
            'email' => ['required', 'email', 'max:40', 'min:5', Rule::unique(Prof_info::class)->ignore($this->user()->id)],
            'contactNumber' => ['required', 'max:16', 'min:8', 'regex:/^[\d+ \+]*$/', Rule::unique(Prof_info::class)->ignore($this->user()->id)],
            'profDept' => ['required'],
            'profField' => ['required'],
            // 'profPic' => ['required'],
        ];
    }
}
