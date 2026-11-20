<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('index.css') }}">
    <title>Список групп</title>
</head>
<body>

{{-- Форма создания новой группы --}}
<h2>Создать группу</h2>
<div class="form">
    <form action="{{ route('groups.store') }}" method="POST">
        @csrf

        <input name="number" placeholder="Номер группы" value="{{ old('number') }}">
        @error('number') <span class="error">{{ $message }}</span> @enderror

        <input name="profession" placeholder="Профессия" value="{{ old('profession') }}">
        @error('profession') <span class="error">{{ $message }}</span> @enderror

        <input type="number" name="member_count" placeholder="Количество участников" value="{{ old('member_count', 0) }}">
        @error('member_count') <span class="error">{{ $message }}</span> @enderror

        <input type="submit" value="Создать">
    </form>
</div>

<hr>

{{-- Таблица со списком групп --}}
<h2>Список групп</h2>
<table class="users-info">
    <thead>
    <tr>
        <th>ID</th>
        <th>Номер</th>
        <th>Профессия</th>
        <th>Кол-во студентов</th>
        <th>Действия</th>
    </tr>
    </thead>

    <tbody>
    @foreach( $group  as $groups )
        <tr>
            <td>{{ $groups->id }}</td>
            <td>{{ $groups->number }}</td>
            <td>{{ $groups->profession }}</td>
            <td>{{ $groups->member_count }}</td>
            <td class="actions">
                <a href="{{ route('groups.edit', $groups) }}" class="btn-edit">Изменить</a>

                <form action="{{ route('groups.destroy', $groups) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-delete" onclick="return confirm('Вы уверены, что хотите удалить эту группу?')">Удалить</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</body>
</html>
