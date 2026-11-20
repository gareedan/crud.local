<?php

namespace App\Http\Controllers;
use App\Models\Group;
use Illuminate\Http\Request;

class GroupsController extends Controller
{
    public function index(){
        $group=Group::all();
        return view('group.index',compact('group'));
    }


    public function store(Request $request)
    {
        // 1. Сначала валидируем данные прямо здесь
        $validated = $request->validate([
            'number'       => 'required|string|max:25',
            'profession'   => 'required|string|max:128',
            'member_count' => 'required|integer|min:0',
        ]);

        // 2. Создаем группу только с проверенными данными
        Group::create($validated);

        // 3. Редиректим на список ГРУПП (было users.index)
        return redirect()->route('groups.index')
            ->with('success', 'Группа успешно создана!');
    }

    public function edit(Group $group)
    {
        return view('group.edit', compact('group'));
    }

    public function update(Request $request, Group $group)
    {
        // validate() проверяет правила и возвращает только валидные данные
        $validated = $request->validate([
            'number' =>'required|string|max:255',
            'profession' =>'required|string|max:255',
            'member_count'=>'nullable|integer|max:255',
        ]);

        // Теперь передаем полученный массив в update()
        $group->update($validated);

        return redirect()->route('groups.index')
            ->with('success', 'Пользователь успешно обновлен!');
    }

    public function destroy(Group $group)
    {
        // Метод delete() удаляет запись из базы данных
        $group->delete();

        // После удаления перенаправляем на список пользователей
        // Показываем сообщение об успешном удалении
        return redirect()->route('groups.index')
            ->with('success', 'Пользователь удален!');
    }
}
