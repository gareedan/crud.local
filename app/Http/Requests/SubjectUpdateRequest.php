<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class SubjectUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'Name' =>'required|string|max:255',
            'Description' =>'string|max:255|nullable',
            'Hours' =>'require|integer|max:255',
        ];
    }
    public function messages(): array{
        return [
            'Name.required' => 'Имя обязательно для заполнения',
            'Hours.required' => 'Часы обязательны для заполнения',

        ];
    }
}
