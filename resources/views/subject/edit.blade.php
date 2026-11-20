<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Редактирование предмета</title>
</head>
<body>
<h2>РЕДАКТ {{ $subject->name }}</h2>

<div class="form">
    <form action="{{ route('subject.update', $subject->id) }}" method="POST">
        @csrf
        @method('PUT')

        <input name="Name" placeholder="Название предмета" value="{{ old('Name', $subject->Name) }}">
        @error('Name') <span class="error">{{ $message }}</span> @enderror

        <input name="Description" placeholder="Description" value="{{ old('Description', $subject->Description) }}">
        @error('Description') <span class="error">{{ $message }}</span> @enderror

        <input type="number" name="Hours" placeholder="Количество часов" value="{{ old('Hours', $subject->Hours) }}">
        @error('Hours') <span class="error">{{ $message }}</span> @enderror

        <div>
            <input type="submit" value="Сохранить изменения">
            <a href="{{ route('subject.index') }}" class="btn-cancel">Отмена</a>
        </div>
    </form>
</div>
</body>
</html>
