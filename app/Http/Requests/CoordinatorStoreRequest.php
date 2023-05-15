<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CoordinatorStoreRequest extends FormRequest
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
            'coorFName' => 'required|max:255',
            'coorLName' => 'required|max:255',
            'email' => 'required|max:255|unique:coor_infos,email',
            'contactNumber' => 'required|max:255|unique:coor_infos,contactNumber',
            'coorDept' => 'required|max:255',
        ];
    }
}
