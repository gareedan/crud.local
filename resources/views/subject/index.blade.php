<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('index.css') }}">
    <title>Список предметов</title>
</head>
<body>

<h2>Создать предмет</h2>
<div class="form">
    <form action="{{ route('subject.store') }}" method="POST">
        @csrf

        <input name="Name" placeholder="Название предмета" value="{{ old('Name') }}">
        @error('Name') <span class="error">{{ $message }}</span> @enderror

        <input name="Description" placeholder="Описание" value="{{ old('Description') }}">
        @error('Description') <span class="error">{{ $message }}</span> @enderror

        <input type="number" name="Hours" placeholder="Количество часов" value="{{ old('Hours') }}">
        @error('Hours') <span class="error">{{ $message }}</span> @enderror

        <input type="submit" value="Создать">
    </form>
</div>

<hr>

<h2>Список предметов</h2>
<table class="users-info">
    <thead>
    <tr>
        <th>ID</th>
        <th>Название</th>
        <th>Описание</th>
        <th>Часы</th>
        <th>Действия</th>
    </tr>
    </thead>

    <tbody>
    @foreach($subject as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->Name }}</td>
            <td>{{ $item->Description }}</td>
            <td>{{ $item->Hours }}</td>
            <td class="actions">
                <a href="{{ route('subject.edit', $item->id) }}" class="btn-edit">Изменить</a>

                <form action="{{ route('subject.destroy', $item->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-delete" onclick="return confirm('Вы уверены, что хотите удалить этот предмет?')">Удалить</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</body>
</html>
