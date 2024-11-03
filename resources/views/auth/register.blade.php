<x-layout>

    <h1 class="text-3xl text-center font-bold text-white">Registration</h1>

    <form method="POST" action="{{ route('register') }}" class="mt-4 max-w-md mx-auto bg-gray-700 p-8 rounded-lg">
        @csrf

        {{-- username  --}}
        <div class="mb-4 flex justify-center flex-col">
            <label for="username" class="text-white mb-3">Username</label>
            <input type="text" name="username" class="text-black w-full rounded-md px-4 py-2" placeholder="Enter your username" id="username" value="{{ old('username') }}">
            @error('username')
                <p class="text-yellow-600 mb-0 mt-1">{{$message}}</p>
            @enderror
        </div>

        {{-- email  --}}
        <div class="mb-4 flex justify-center flex-col">
            <label for="email" class="text-white mb-3">Email</label>
            <input type="email" name="email" id="email" class="text-black w-full rounded-md px-4 py-2" placeholder="Enter your email" value="{{ old('email') }}">
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

        {{-- confirm password  --}}
        <div class="mb-4 flex justify-center flex-col">
            <label for="password_confirmation" class="text-white mb-3">Confirm Password</label>
            <input type="password" class="text-black w-full rounded-md px-4 py-2" placeholder="Confirm your password" name="password_confirmation" id="password_confirmation">
        </div>

        <button type="submit" class="bg-blue-500 w-full hover:bg-blue-600 transition text-white px-4 mt-4 text-center py-2 rounded-md">Register</button>

    </form>

</x-layout>
