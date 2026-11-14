<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('index.css')}}">
    <title>Document</title>
</head>
<body>
<table>
    <h2>Create</h2>
    <div class="form">
        <form action="{{route('users.store')}}" method="post">
            @csrf
            <input name="name" placeholder="name" value="{{old('name')}}">
            @error('name')<span class="error">{{$message}}</span> @enderror

            <input name="surname" placeholder="surname" value="{{old('surname')}}">
            @error('surname')<span class="error">{{$message}}</span> @enderror

            <input name="patronymic" placeholder="patronymic" value="{{old('patronymic')}}">
            @error('patronymic')<span class="error">{{$message}}</span> @enderror

            <input name="email" placeholder="email" value="{{old('email')}}">
            @error('email')<span class="error">{{$message}}</span> @enderror

            <input name="role_id" placeholder="role_id" value="{{old('role_id')}}">
            @error('role_id')<span class="error">{{$message}}</span> @enderror

            <input type="submit" value="Создать">
        </form>
    </div>
</table>

<h2>Список пользователей</h2>
<table class="users-info">
    <thead>
    <tr>
        <th>Имя</th>
        <th>Фамилия</th>
        <th>Отчество</th>
        <th>Email</th>
        <th>Роль</th>
        <th>Действия</th>
    </tr>
    </thead>

    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->surname }}</td>
            <td>{{ $user->patronymic }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->role_id }}</td>
            <td class="actions">
                <a href="{{route('users.edit' , $user)}}" class="btn-edit">Изменить</a>

                <form action="{{ route('users.destroy', $user )}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-delete" onclick="return confirm('Вы уверены что хотите удалить данного пользователя')">Удалить</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
