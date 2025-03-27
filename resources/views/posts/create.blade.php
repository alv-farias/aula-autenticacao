<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Create Post</title>
</head>
<body class="bg-zinc-400">
    <header class="bg-black text-white p-4 flex justify-between">
        <div>
            <a href="{{route('home')}}" class="text-2xl font-semibold">FBS forum</a>
        </div>
        <div class="flex items-center space-x-4">
            <h1 class="font-semibold">{{ Auth::user()->name }}</h1>
            <form action="{{route('auth.logout')}}" method="post">
                @csrf
                <button type="submit" class="font-semibold hover:text-zinc-500 hover:cursor-pointer">Logout</button>
            </form>
        </div>
    </header>

    <main class="p-8">
        <h1 class="text-2xl font-semibold">Create a new Post</h1>

        <form action="{{route('posts.store')}}" method="post">
            @csrf
            <div class="flex flex-col gap-2 p-6">
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" class="border border-black">

                <label for="contet">Content:</label>
                <textarea class="border border-black" name="content" id="content" cols="30" rows="10" placeholder="Write your post..."></textarea>

                <input type="submit" class="bg-blue-400 w-1/4 rounded-sm p-2" value="Create">
            </div>
        </form>
    </main>
</body>
</html>
