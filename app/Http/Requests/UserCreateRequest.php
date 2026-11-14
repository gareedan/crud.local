<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UserCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' =>'required|string|max:255',
            'surname' =>'required|string|max:255',
            'patronymic'=>'nullable|string|max:255',
            'email' =>'required|string|email|max:255|unique:users',
            'role_id' =>'required|integer|exists:roles,id',
        ];
    }
    public function messages(): array{
        return [
            'name.required' => 'Имя обязательно для заполнения',
            'surname.required' => 'Фамилия обязательна для заполнения',
            'email.required' => 'обязателен для заполнения',
            'email.email'=>'Введите корректный формат email',
            'email.unique' => 'Пользователь с такой почтой существует',
            'role_id.exists' => 'Выбранная роль не найдена',
        ];
    }
}
