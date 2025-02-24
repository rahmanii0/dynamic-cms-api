<?php

namespace Modules\Entity\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EntityRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255|unique:entities',
            'description' => 'nullable|string|max:1000',
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'Entity name is required.',
            'name.unique' => 'An entity with this name already exists.',
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
