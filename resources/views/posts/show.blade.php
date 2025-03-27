<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class="bg-zinc-400">
    <header class="bg-black text-white p-4 flex justify-between">
        <div>
            <h1 class="text-2xl font-bold">FBS forum</h1>
        </div>
        <div class="flex items-center space-x-4">
            <h1 class="font-semibold">{{ Auth::user()->name }}</h1>
            <form action="{{route('auth.logout')}}" method="post">
                @csrf
                <button type="submit" class="font-semibold hover:text-zinc-500 hover:cursor-pointer">Logout</button>
            </form>
        </div>
    </header>
    <main class="p-8 space-y-4">
        <h1 class="text-3xl font-bold">Detalhes do Post</h1>

        <div>
            <h1 class="text-xl font-semibold">{{$post->title}}</h1>
            <p>{{$post->content}}</p>
        </div>

        <div>
            <h1 class="font-semibold">Publicado: {{$post->created_at}}</h1>
            <h2 class="font-semibold">Editado: {{$post->updated_at}}</h2>
        </div>

        <div>
            <a href="{{route('posts.edit', $post->id)}}" class="p-2 bg-green-400">Editar</a>
        </div>
    </main>

</body>
</html>
