<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StudentsUpdateRequest extends FormRequest
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
            'Name' =>'required|string|max:255',
            'Surname' =>'required|string|max:255',
            'Patronymic' =>'required|string|max:255|nullable',
            'Email' =>'required|string|email|max:255|unique:students',
            'Phone' =>'required|string|max:255',
            'Birthday' =>'required|date|before:today|date_format:Y-m-d',
            'group_id' =>'required|integer|exists:groups,id'
        ];
    }
    public function messages(): array{
        return [
            'Name.required' => 'Имя обязательно для заполнения',
            'Surname.required' => 'Фамилия обязательна для заполнения',
            'Email.required' => 'обязателен для заполнения',
            'Email.email'=>'Введите корректный формат email',
            'Email.unique' => 'Пользователь с такой почтой существует',
            'group_id.exists' => 'Выбранная роль не найдена',
            'Birthday.required'=> 'Дата рождения обязательна для заполнения',
            'Birthday.date'=> 'Дата рождения должна быть валидной датой',
            'Birthday.before' => 'Дата рождения не может быть в будущем',
        ];
    }
}
