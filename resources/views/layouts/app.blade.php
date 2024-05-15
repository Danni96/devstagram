<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Devstagram - @yield('titulo')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 h-screen">
    <header class="p-5 border-b bg-white shadow">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-3xl text-black font-bold">
                Devstagram
            </h1>

            <nav class="flex gap-2 items-center">
                <a class="font-bold text-gray-600" cls href="#">Login</a>
                <a class="font-bold text-gray-600" href="{{ route('register')}}">Crear Cuenta</a>
            </nav>
        </div>
    </header>
    <main class="container mx-auto mt-10">
        <h2 class="text-black text-center text-3xl mb-10">
            @yield('titulo')
        </h2>
        @yield('contenido')
    </main>

    <footer class="mt-10 text-center p-5 text-gray-500 font-bold uppercase">
        Devstagram - todos los derechos reservados {{ now()->year }}
    </footer>

</body>
</html>
