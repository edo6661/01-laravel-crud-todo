<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>@yield('title')</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        
    </head>
    <body class="antialiased">
        <nav class=" bg-slate-500 p-2 text-white ">
            <div class=" max-w-5xl flex items-center justify-between mx-auto">
                <div>
                    <a href="/">
                        <img class=" w-12 h-12 rounded-full" src="https://i.pinimg.com/564x/8c/9e/9e/8c9e9ec7bcfc948f2b38866f0c1240e4.jpg" alt="Logo">
                    </a>
                </div>
                <div class="flex items-center gap-2">
                    <a href="/create">Create</a>
                </div>
                <div>
                    <a href="/login">
                        <x-button>Login</x-button></a>
                </div>
            </div>
        </nav>
        <main class=" min-h-screen">
            @yield('content')
        </main>
        <footer>
            <p class="text-center"> test footer</p>
        </footer>
    </body>
</html>
