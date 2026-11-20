<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class GroupCreateRequest extends FormRequest
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
            'number' =>'required|string|max:255',
            'profession' =>'required|string|max:255',
            'member_count'=>'nullable|integer|max:255',
        ];
    }
    public function messages(): array{
        return [
            'number.required' => 'Имя обязательно для заполнения',
            'profession.required' => 'Фамилия обязательна для заполнения',
            'member_count.required' => 'обязателен для заполнения',
        ];
    }
}
