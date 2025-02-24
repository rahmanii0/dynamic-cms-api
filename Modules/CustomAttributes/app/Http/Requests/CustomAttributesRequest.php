<?php

namespace Modules\CustomAttributes\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomAttributesRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'data_type' => 'required|string|in:string,integer,float,date',
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
