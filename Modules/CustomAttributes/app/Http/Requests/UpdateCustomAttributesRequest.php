<?php

namespace Modules\CustomAttributes\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCustomAttributesRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'name' => 'string|max:255',
            'data_type' => 'string|in:string,integer,float,date',
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
