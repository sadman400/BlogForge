<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-800 container">

    <header class=" text-white p-4 mt-4 mb-4 sticky top-0 z-10">
        <nav class="flex justify-between">
            <a href="{{ route('posts.index') }}" class="hover:bg-gray-600 bg-gray-700 px-4 py-2 rounded-md transition">Home</a>

            @guest
                <div class="nav-right flex gap-4">
                    <a href="{{route('login')}}" class="hover:bg-gray-600 bg-gray-700 px-4 py-2 rounded-md transition">Login</a>
                    <a href="{{ route('register') }}" class="hover:bg-gray-600 bg-gray-700 px-4 py-2 rounded-md transition">Register</a>
                </div>
            @endguest


            @auth
                <div class="nav-right flex gap-4">
                    <a href="{{route('dashboard')}}" class="hover:bg-gray-600 bg-gray-700 px-4 py-2 rounded-md transition">Dashboard</a>
                    <form action="{{route('logout')}}" method="POST" class="hover:bg-yellow-600 bg-yellow-700 px-4 py-2 rounded-md transition">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </div>
            @endauth
        </nav>
    </header>

    <main class="p-4">
        {{ $slot }}
    </main>

</body>
</html>
