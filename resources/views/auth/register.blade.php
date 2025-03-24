<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Register</title>
</head>
<body class="bg-black text-white">
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div>
            <h1 class="mt-10 text-center text-3xl font-bold tracking-tight">Register</h1>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="{{route('auth.register')}}" method="post">
                @csrf
                <div>
                    <label for="name" class="block text-sm/6 font-medium">Nome</label>
                    <div>
                        <input class="block w-full rounded-md bg-white text-black px-3 py-1.5 text-base " id="name" name="name" type="text">
                    </div>
                </div>

                <div>
                    <label for="email" class="block text-sm/6 font-medium">Email</label>
                    <div>
                        <input class="block w-full rounded-md bg-white text-black px-3 py-1.5 text-base " id="name" name="email" type="text">
                    </div>
                </div>

                <div>
                    <label for="password" class="block text-sm/6 font-medium">Password</label>
                    <div>
                        <input class="block w-full rounded-md bg-white text-black px-3 py-1.5 text-base " type="password" name="password" id="password">
                    </div>
                </div>

                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Register</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
