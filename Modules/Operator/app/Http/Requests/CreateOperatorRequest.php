<?php

namespace Modules\Operator\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateOperatorRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'user_name' => 'required|string|max:255',
            'email' => 'email|max:255|unique:operators',
            'password' =>[
                'required',
                'string',
                'min:8',
                'regex:/[a-z]/',
                'regex:/[A-Z]/',
                'regex:/[0-9]/',
                'regex:/[@$!%*#?&]/'
            ]
        ];
    }

    public function messages(): array
    {
        return [
            'user_name.required' => 'The Operator name is required.',
            'user_name.unique' => 'This Operator name is already taken. Please choose another.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'This email is already registered. Please use another email.',
            'password.required' => 'Password is required.',
            'password.min' => 'Password must be at least 8 characters long.',
            'password.regex' => 'Password must include at least one uppercase letter, one lowercase letter, one number, and one special character.',
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
