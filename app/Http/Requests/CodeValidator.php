<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CodeValidator extends FormRequest
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
            'phone_number' => 'required|numeric|exists:users,phone_number',
            'code' => 'required|numeric|min:4|exists:active_code,code'
            //
        ];
    }
}
