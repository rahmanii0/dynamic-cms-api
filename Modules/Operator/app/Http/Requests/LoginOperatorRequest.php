<?php

namespace Modules\Operator\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginOperatorRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'user_name' => 'required|exists:operators,user_name',
            'password' => 'required|string|min:8'
        ];
    }

    public function messages(): array
    {
        return [
            'user_name.required' => 'username is required.',
            'password.required' => 'Password is required.',
            'password.min' => 'Password must be at least 8 characters long.'
        ];
    }
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
}
