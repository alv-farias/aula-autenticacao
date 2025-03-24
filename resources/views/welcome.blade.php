<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-zinc-400">
        <header class="bg-black text-white p-8 flex justify-between">
            <div class="flex items-center">
                <h1 class="font-semibold text-3xl">FBS Forum</h1>
            </div>
            @if (Route::has('login'))
                <div>
                    <nav class="flex items-center gap-8">
                        @auth
                            <a
                                href="{{route('home')}}"
                                class="inline-block px-5 py-1.5"
                            >
                                <span class="font-semibold hover:text-zinc-500">Home</span>
                            </a>

                            <form action="{{route('auth.logout')}}" method="post">
                                @csrf
                                <button type="submit" class="font-semibold hover:cursor-pointer hover:text-zinc-500">Logout</button>
                            </form>
                        @else
                            <a
                                href="{{ route('login') }}"
                                class="inline-block px-5 py-1.5 border border-black rounded-sm"
                            >
                            <span class="font-semibold">Log in</span>
                            </a>

                            @if (Route::has('register'))
                                <a
                                    href="{{ route('register') }}"
                                    class="inline-block px-5 py-1.5 border border-black rounded-sm"
                                >
                                <span class="font-semibold">Register</span>
                                </a>
                            @endif
                        @endauth
                    </nav>
                </div>
            @endif
        </header>
        <main class="p-6 flex">
            <div>
                <div>
                    <h1 class="font-bold text-3xl">
                        Fórum Oficial do curso de programação do projeto FBStech
                    </h1>
                </div>
                <div class="mt-4 ">
                    <p class="text-xl">
                        Poste suas dúvidas relacionadas as aulas, compartilhe seu aprendizado,
                        auxilie seus colegas e contribua para um ambiente de desenvolvimento
                        compartilhado!
                    </p>
                </div>
                <div class="mt-6 mb-6">
                    <h2 class="font-bold text-xl">
                        Conheça mais sobre o nosso trabalho:
                    </h2>
                    <div class="mt-6 mb-6">
                        <a href="" class="bg-black p-3 text-white font-semibold">Fundação Beto Studart</a>
                        <a href="" class="bg-black p-3 text-white font-semibold">AACER</a>
                        <a href="" class="bg-black p-3 text-white font-semibold">Escola Livre de Música</a>
                    </div>
                </div>
            </div>
            <div>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/hev22-D_WwQ?si=g2HkWwJ1294CXId9" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </main>
    </body>
</html>
