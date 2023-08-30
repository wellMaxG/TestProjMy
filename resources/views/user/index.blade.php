<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
</head>
<body>
    <h1>Страница регистрации пользователя</h1>
    {{-- @foreach ($users as $user)
    <p>{{$user}}</p>
    @endforeach --}}

    <form method="POST" action="">
        @csrf
        Введите ваш логин: <input type="text" name="login" id="">
        <br>
        Введите ваш пароль: <input type="text" name="password" id="">
        <br>
        Введите ваш возраст: <input type="text" name="age" id="">
        <br>
        Введите вашу почту: <input type="text" name="age" id="">
        <br>
        <input type="submit" value="Отправить">
</body>
</html>