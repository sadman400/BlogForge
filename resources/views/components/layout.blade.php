<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black text-gray-200">

    <header class="bg-black text-white shadow-lg py-4">
        <nav class="max-w-screen-lg mx-auto flex justify-between items-center px-4">
            <a href="{{ route('posts.index') }}" class="text-xl font-semibold text-green-500 hover:text-green-400">Home</a>

            @guest
                <div class="flex items-center gap-6">
                    <a href="{{ route('login') }}" class="bg-gray-800 hover:bg-gray-700 px-4 py-2 rounded-md transition">Login</a>
                    <a href="{{ route('register') }}" class="bg-gray-800 hover:bg-gray-700 px-4 py-2 rounded-md transition">Register</a>
                </div>
            @endguest

            @auth
                <div class="flex items-center gap-6">
                    <a href="{{ route('dashboard') }}" class="bg-gray-800 hover:bg-gray-700 px-4 py-2 rounded-md transition">Dashboard</a>
                    <form action="{{ route('logout') }}" method="POST" class="bg-red-700 hover:bg-red-600 px-4 py-2 rounded-md transition">
                        @csrf
                        <button type="submit" class="text-white">Logout</button>
                    </form>
                </div>
            @endauth
        </nav>
    </header>

    <main class="py-8 px-6 mx-auto max-w-screen-lg">
        {{ $slot }}
    </main>

</body>
</html>
