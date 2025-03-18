<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Edit Post</title>
</head>
<body>
    <a href="/home" class="bg-red-400 rounded-sm p-2">
        Voltar
    </a>
    <h1>Edit your Post</h1>

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
</body>
</html>
