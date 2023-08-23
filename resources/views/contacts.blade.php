<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="app.css">
    <title>Contacts</title>
</head>
<body>
    <header class="headerContent">
    @foreach ($varcontact as $elem)
	<p>{{ $elem }}</p>
    @endforeach

    @foreach ($varadress as $elem)
	<p>{{ $elem }}</p>
    @endforeach
</header>
</body>
</html>