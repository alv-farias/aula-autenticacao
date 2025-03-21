<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <h1 class="text-3xl font-bold">Detalhes do Post</h1>

    <div>
        <p>{{$post->title}}</p>
        <p>{{$post->content}}</p>
    </div>

    <div>
        <a href="{{route('posts.edit', $post->id)}}" class="p-2 bg-green-400">Editar</a>
    </div>
</body>
</html>
