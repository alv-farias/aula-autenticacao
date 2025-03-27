<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Home Page</title>
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

    <main class="p-8 space-y-6">
        <h1 class="text-3xl font-semibold">Seja bem vindo, {{Auth::user()->name}}</h1>

        <a href="{{route('posts.create')}}" class="bg-black text-white font-semibold p-2">
            New Post
        </a>

        <div class="mt-6">
            @forelse ($posts as $post )
                <div>
                    <div class="flex space-x-4 items-center mb-4">
                        <h1 class="font-semibold">{{$post->title}}</h1>
                        <div class="bg-green-400 px-2 py-3 hover:cursor-pointer hover:bg-green-600">
                            <a href="{{route('posts.show', $post->id)}}" class="text-black">Detalhes</a>
                        </div>
                        <form action="{{route('posts.delete', $post->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <div class="bg-red-400 px-2 py-3 hover:cursor-pointer hover:bg-red-600">
                                <input type="submit" value="Apagar" class="text-black hover:cursor-pointer">
                            </div>
                        </form>
                    </div>
                </div>
            @empty
                <p>Nenhum Post Cadastrado</p>
            @endforelse
        </div>
    </main>


</body>
</html>
