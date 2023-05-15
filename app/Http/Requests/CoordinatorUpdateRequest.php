<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Models\Coor_info;

class CoordinatorUpdateRequest extends FormRequest
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
            'email' => ['required',Rule::unique(Coor_info::class)->ignore($this->user()->id)],
            'contactNumber' => ['required',Rule::unique(Coor_info::class)->ignore($this->user()->id)]
        ];
    }
}
