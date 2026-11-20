<?php

namespace App\Http\Controllers;
use App\Models\Group;
use App\Models\Students;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $student=Students::all();
        return view('student.index',compact('student'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'Name' =>'required|string|max:255',
            'Surname' =>'required|string|max:255',
            'Patronymic' =>'required|string|max:255|nullable',
            'Email' =>'required|string|email|max:255|unique:students',
            'Phone' =>'required|string|max:255',
            'Birthday' =>'required|date|before:today|date_format:Y-m-d',
            'group_id' =>'required|integer|exists:groups,id'
        ]);
        Students::create($validated);
        return redirect()->route('student.index')
            ->with('success', 'Группа успешно создана!');
    }

    public function edit(Students $student)
    {
        return view('student.edit', compact('student'));
    }

    public function update(Request $request, Students $student)
    {
        // validate() проверяет правила и возвращает только валидные данные
        $validated = $request->validate([
            'Name' =>'required|string|max:255',
            'Surname' =>'required|string|max:255',
            'Patronymic' =>'required|string|max:255|nullable',
            'email' =>'required|string|email|max:255|unique:students',
            'Phone' =>'required|string|max:255',
            'Birthday' =>'required|date|before:today|date_format:Y-m-d',
            'group_id' =>'required|integer|exists:groups,id'
        ]);

        // Теперь передаем полученный массив в update()
        $student->update($validated);

        return redirect()->route('student.index')
            ->with('success', 'Пользователь успешно обновлен!');
    }

    public function destroy(Students $student)
    {
        // Метод delete() удаляет запись из базы данных
        $student->delete();

        // После удаления перенаправляем на список пользователей
        // Показываем сообщение об успешном удалении
        return redirect()->route('student.index')
            ->with('success', 'Пользователь удален!');
    }
}
