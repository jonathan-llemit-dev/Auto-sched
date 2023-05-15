<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SchoolConfigRequest extends FormRequest
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
            // 'mode' => ['required'],
            // 'schTimeStartSun' => ['required'],
            // 'schTimeEndSun' => ['required'],
            // 'schTimeStartMon' => ['required'],
            // 'schTimeEndMon' => ['required'],
            // 'schTimeStartTue' => ['required'],
            // 'schTimeEndTue' => ['required'],
            // 'schTimeStartWed' => ['required'],
            // 'schTimeEndWed' => ['required'],
            // 'schTimeStartThu' => ['required'],
            // 'schTimeEndThu' => ['required'],
            // 'schTimeStartFri' => ['required'],
            // 'schTimeEndFri' => ['required'],
            // 'schTimeStartSat' => ['required'],
            // 'schTimeEndSat' => ['required'],
        ];
    }

    // public function messages()
    // {
    //     return 
    //     [
    //         'mode.required' => 'This Field is Required',

    //         'schTimeStartSun.required' => '',
    //         'schTimeEndSun.required' => '',

    //         'schTimeStartMon.required' => '',
    //         'schTimeEndMon.required' => '',

    //         'schTimeStartTue.required' => '',
    //         'schTimeEndTue.required' => '',

    //         'schTimeStartWed.required' => '',
    //         'schTimeEndWed.required' => '',

    //         'schTimeStartThu.required' => '',
    //         'schTimeEndThu.required' => '',

    //         'schTimeStartFri.required' => '',
    //         'schTimeEndFri.required' => '',

    //         'schTimeStartSat.required' => '',
    //         'schTimeEndSat.required' => '',
    //     ];
    // }
}
