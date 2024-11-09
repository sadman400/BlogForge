<x-layout>
    <h1 class="text-4xl font-bold text-white mb-6">Dashboard</h1>

    <div class="mt-8 bg-black p-8 rounded-lg shadow-lg">
        <form action="{{ route('posts.store') }}" method="post">
            @csrf

            <div class="mb-6">
                <label for="title" class="text-white mb-2 block text-lg">Title</label>
                <input type="text" name="title" id="title" class="w-full bg-black text-gray-300 rounded-md px-4 py-3 border border-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-400" placeholder="Enter your title" value="{{ old('title') }}">
                @error('title')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="body" class="text-white mb-2 block text-lg">Body</label>
                <textarea name="body" rows="5" id="body" class="w-full bg-black text-gray-300 rounded-md px-4 py-3 border border-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-400" placeholder="Enter your body">{{ old('body') }}</textarea>
                @error('body')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            @if (session('success'))
                <p class="text-yellow-400 mb-4 mt-1">{{ session('success') }}</p>
            @elseif (session('delete'))
                <p class="text-yellow-400 mb-4 mt-1">{{ session('delete') }}</p>
            @elseif (session('updated'))
                <p class="text-yellow-400 mb-4 mt-1">{{ session('updated') }}</p>
            @endif

            <!-- Create Post Button -->
            <button type="submit" class="bg-gray-700 hover:bg-gray-800 text-white px-6 py-3 rounded-md w-full mt-4 transition duration-300 ease-in-out transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-gray-500">Create Post</button>
        </form>
    </div>

    <h1 class="text-4xl mt-12 font-bold text-white">Your Latest Posts</h1>

    <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($posts as $post)
            <x-PostCard :post="$post">
                <div class="flex justify-end mt-4 gap-3">
                    <a href="{{route('posts.edit', $post->id)}}" class="bg-gray-700 hover:bg-gray-800 text-white px-4 py-2 rounded-md transition">Edit</a>

                    <form action="{{route('posts.destroy', $post)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="bg-red-700 hover:bg-red-800 text-white px-4 py-2 rounded-md transition ">Delete</button>
                    </form>
                </div>
            </x-PostCard>
        @endforeach
    </div>

    <div class="mt-6">
        {{ $posts->links() }}
    </div>

</x-layout>
