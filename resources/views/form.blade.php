<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if ($errors->any())
<div class="alert alert-danger">
<ul>
            @foreach ($errors->all() as $error)
<li>{{ $error }}</li>
            @endforeach
</ul>
</div>
@endif
    <form method="POST" action="">
    @csrf
    {{-- @method('PUT') --}}
    Enter login: <input type="text" name="login" id="">
    <br>
    <br>
    Enter password: <input type="text" name="password" id="">
    <br>
    <input type="submit" value="Send">
    </form>
</body>
</html>