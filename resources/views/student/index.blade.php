<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('index.css') }}">
    <title>Список студентов</title>
</head>
<body>


<h2>Создать студента</h2>
<div class="form">
    <form action="{{ route('student.store') }}" method="POST">
        @csrf

        <input name="Name" placeholder="Имя" value="{{ old('Name') }}">
        @error('Name') <span class="error">{{ $message }}</span> @enderror

        <input name="Surname" placeholder="Фамилия" value="{{ old('Surname') }}">
        @error('Surname') <span class="error">{{ $message }}</span> @enderror

        <input name="Patronymic" placeholder="Отчество" value="{{ old('Patronymic') }}">
        @error('Patronymic') <span class="error">{{ $message }}</span> @enderror

        <input name="Email" type="Email" placeholder="Email" value="{{ old('Email') }}">
        @error('Email') <span class="error">{{ $message }}</span> @enderror

        <input name="Phone" placeholder="Телефон" value="{{ old('Phone') }}">
        @error('Phone') <span class="error">{{ $message }}</span> @enderror

        <input type="date" name="Birthday" placeholder="Дата рождения" value="{{ old('Birthday') }}">
        @error('Birthday') <span class="error">{{ $message }}</span> @enderror

        <input type="number" name="group_id" placeholder="ID группы" value="{{ old('group_id') }}">
        @error('group_id') <span class="error">{{ $message }}</span> @enderror

        <input type="submit" value="Создать">
    </form>
</div>
<hr>
<h2>Список студентов</h2>
<table class="users-info">
    <thead>
    <tr>
        <th>ID</th>
        <th>Имя</th>
        <th>Фамилия</th>
        <th>Email</th>
        <th>Группа</th>
        <th>Действия</th>
    </tr>
    </thead>

    <tbody>
    @foreach( $student  as $students )
        <tr>
            <td>{{ $students->id }}</td>
            <td>{{ $students->Name }}</td>
            <td>{{ $students->Surname }}</td>
            <td>{{ $students->Email }}</td>
            <td>{{ $students->group_id }}</td>
            <td class="actions">
                <a href="{{ route('student.edit', $students->id) }}" class="btn-edit">Изменить</a>

                <form action="{{ route('student.destroy', $students->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-delete" onclick="return confirm('Вы уверены, что хотите удалить этого студента?')">Удалить</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</body>
</html>
