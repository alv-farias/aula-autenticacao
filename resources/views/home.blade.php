<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Home Page</title>
</head>
<body>
    <h1>Seja bem vindo, {{Auth::user()->name}}</h1>
    <h2>Você esta logado com o email: {{ Auth::user()->email }}</h2>

    <a href="{{route('posts.create')}}" class="bg-blue-400 rounded-sm p-2">
        New Post
    </a>

    <form action="{{route('auth.logout')}}" method="post">
        @csrf
        <button type="submit" class="bg-red-600 mt-6 rounded-sm p-2">Logout</button>
    </form>
</body>
</html>
