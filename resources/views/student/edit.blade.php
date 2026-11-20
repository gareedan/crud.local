<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Редактирование студента</title>
</head>
<body>
<h2>РЕДАКТ {{ $student->Name }} {{ $student->Surname }}</h2>

<div class="form">
    <form action="{{ route('student.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')

        <input name="Name" placeholder="Имя" value="{{ old('Name', $student->Name) }}">
        @error('Name') <span class="error">{{ $message }}</span> @enderror

        <input name="Surname" placeholder="Фамилия" value="{{ old('Surname', $student->Surname) }}">
        @error('Surname') <span class="error">{{ $message }}</span> @enderror

        <input name="Patronymic" placeholder="Отчество" value="{{ old('Patronymic', $student->Patronymic) }}">
        @error('Patronymic') <span class="error">{{ $message }}</span> @enderror

        <input name="email" type="email" placeholder="Email" value="{{ old('email', $student->email) }}">
        @error('email') <span class="error">{{ $message }}</span> @enderror

        <input name="Phone" placeholder="Телефон" value="{{ old('Phone', $student->Phone) }}">
        @error('Phone') <span class="error">{{ $message }}</span> @enderror

        <input type="date" name="Birthday" placeholder="Дата рождения" value="{{ old('Birthday', $student->Birthday) }}">
        @error('Birthday') <span class="error">{{ $message }}</span> @enderror

        {{-- Поле для ID группы с плейсхолдером вместо списка --}}
        <input name="group_id" type="number" placeholder="ID группы" value="{{ old('group_id', $student->group_id) }}">
        @error('group_id') <span class="error">{{ $message }}</span> @enderror

        <div>
            <input type="submit" value="Сохранить изменения">
            <a href="{{ route('student.index') }}" class="btn-cancel">Отмена</a>
        </div>
    </form>
</div>
</body>
</html>
