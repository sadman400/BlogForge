<x-layout>

    <h1 class="text-3xl text-center font-bold text-white">Login to your Account</h1>

    <form method="POST" action="{{ route('login') }}" class="mt-4 max-w-md mx-auto bg-gray-700 p-8 rounded-lg">
        @csrf

        {{-- email  --}}
        <div class="mb-4 flex justify-center flex-col">
            <label for="email" class="text-white mb-3">Email</label>
            <input type="text" name="email" id="email" class="text-black w-full rounded-md px-4 py-2" placeholder="Enter your email" value="{{ old('email') }}">
            @error('email')
                <p class="text-yellow-600 mb-0 mt-1">{{$message}}</p>
            @enderror
        </div>

        {{-- password  --}}
        <div class="mb-4 flex justify-center flex-col">
            <label for="password" class="text-white mb-3">Password</label>
            <input type="password" name="password" id="password" class="text-black w-full rounded-md px-4 py-2" placeholder="Enter your password">
            @error('password')
                <p class="text-yellow-600 mb-0 mt-1">{{$message}}</p>
            @enderror
        </div>

        <div>
            <input type="checkbox" name="remember" id="remember" class="mr-2">
            <label for="remember" class="text-white">Remember me</label>
        </div>


        @error('failed')
            <p class="text-yellow-600 mb-0 mt-1">{{$message}}</p>
        @enderror


        <button type="submit" class="bg-blue-500 w-full hover:bg-blue-600 transition text-white px-4 mt-4 text-center py-2 rounded-md">Login</button>
    </form>

</x-layout>
