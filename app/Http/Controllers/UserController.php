<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users=User::all();
        return view('users.index',compact('users'));
    }


    public function store(Request $request)
    {

        User::create($request->validated());

        return redirect()->route('users.index')->with('success','User created successfully.');
//        $user = new User();
//        $user->name       = $request->input('name');
//        $user->surname    = $request->input('surname');
//        $user->patronymic = $request->input('patronymic');
//        $user->email      = $request->input('email');
//        $user->role_id    = $request->input('role_id', 1); // По умолчанию роль 1
//        $user->save();
//
//        return redirect()->route('users.index');
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        // validate() проверяет правила и возвращает только валидные данные
        $validated = $request->validate([
            'name'       => 'required|string|max:255',
            'surname'    => 'required|string|max:255',
            'patronymic' => 'nullable|string|max:255',
            'email'      => 'required|email|unique:users,email,' . $user->id,
            'role_id'    => 'required|integer',
        ]);

        // Теперь передаем полученный массив в update()
        $user->update($validated);

        return redirect()->route('users.index')
            ->with('success', 'Пользователь успешно обновлен!');
    }

    public function destroy(User $user)
    {
        // Метод delete() удаляет запись из базы данных
        $user->delete();

        // После удаления перенаправляем на список пользователей
        // Показываем сообщение об успешном удалении
        return redirect()->route('users.index')
            ->with('success', 'Пользователь удален!');
    }
}
