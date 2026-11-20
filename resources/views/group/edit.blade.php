<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>РЕДАКТ {{$group->number}}</h2>
<div class="form">
    <form action="{{ route('groups.update', $group->id) }}" method="POST">
        @csrf
        @method('PUT')

        <input name="number" placeholder="номер" value="{{ old('number', $group->number) }}">
        @error('number') <span class="error">{{ $message }}</span> @enderror

        <input name="profession" placeholder="profession" value="{{ old('profession', $group->profession) }}">
        @error('profession') <span class="error">{{ $message }}</span> @enderror

        <input name="member_count" placeholder="member_count" value="{{ old('member_count', $group->member_count) }}">
        @error('member_count') <span class="error">{{ $message }}</span> @enderror


        <div>
            <input type="submit" value="Сохранить изменения">
            <a href="{{route('groups.index')}}" class="btn-cancel">отмена</a>
        </div>
    </form>
</div>
</body>
</html>
