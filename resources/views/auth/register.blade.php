<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    <form action="{{route('auth.register')}}" method="post">
        @csrf
        <label for="name">Nome:</label>
        <input id="name" name="name" type="text">

        <label for="email">Email</label>
        <input id="name" name="email" type="text">

        <label for="password">Password</label>
        <input type="password" name="password" id="password">

        <button type="submit">Registrar</button>
    </form>
</body>
</html>