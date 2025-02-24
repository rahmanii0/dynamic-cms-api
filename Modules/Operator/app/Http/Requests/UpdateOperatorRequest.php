<?php

namespace Modules\Operator\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOperatorRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'user_name' => 'string|max:255|unique:operators',
            'email' => 'email|max:255|unique:operators',
        ];
    }
    public function messages(): array
    {
        return [
            'user_name.required' => 'The Operator name is required.',
            'user_name.unique' => 'This Operator name is already taken. Please choose another.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'This email is already registered. Please use another email.',
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
