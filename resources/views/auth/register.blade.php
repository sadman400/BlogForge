<x-layout>
    <h1 class="text-4xl text-center font-bold text-white mb-8">Registration</h1>

    <form method="POST" action="{{ route('register') }}" class="mt-4 max-w-md mx-auto bg-gray-800 p-8 rounded-lg shadow-lg">
        @csrf

        {{-- Username --}}
        <div class="mb-6">
            <label for="username" class="text-white mb-2 block text-lg">Username</label>
            <input type="text" name="username" id="username" class="w-full bg-gray-900 text-white border border-gray-600 rounded-md px-4 py-3 focus:ring-2 focus:ring-green-500" placeholder="Enter your username" value="{{ old('username') }}">
            @error('username')
                <p class="text-yellow-600 mt-1 text-sm">{{$message}}</p>
            @enderror
        </div>

        {{-- Email --}}
        <div class="mb-6">
            <label for="email" class="text-white mb-2 block text-lg">Email</label>
            <input type="email" name="email" id="email" class="w-full bg-gray-900 text-white border border-gray-600 rounded-md px-4 py-3 focus:ring-2 focus:ring-green-500" placeholder="Enter your email" value="{{ old('email') }}">
            @error('email')
                <p class="text-yellow-600 mt-1 text-sm">{{$message}}</p>
            @enderror
        </div>

        {{-- Password --}}
        <div class="mb-6">
            <label for="password" class="text-white mb-2 block text-lg">Password</label>
            <input type="password" name="password" id="password" class="w-full bg-gray-900 text-white border border-gray-600 rounded-md px-4 py-3 focus:ring-2 focus:ring-green-500" placeholder="Enter your password">
            @error('password')
                <p class="text-yellow-600 mt-1 text-sm">{{$message}}</p>
            @enderror
        </div>

        {{-- Confirm Password --}}
        <div class="mb-6">
            <label for="password_confirmation" class="text-white mb-2 block text-lg">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="w-full bg-gray-900 text-white border border-gray-600 rounded-md px-4 py-3 focus:ring-2 focus:ring-green-500" placeholder="Confirm your password">
        </div>

        {{-- Submit Button --}}
        <button type="submit" class="bg-green-600 hover:bg-green-700 transition duration-300 text-white w-full py-3 rounded-md mt-4">
            Register
        </button>
    </form>
</x-layout>
