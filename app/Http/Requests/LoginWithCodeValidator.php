<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginWithCodeValidator extends FormRequest
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
            'phone_number' => 'required|starts_with:0|min:10',
        ];
    }
    
    public function messages()
    {
        return [
            'phone_number.starts_with' => 'شماره تلفن باید با 0 شروع شود',
        ];
    }
}
