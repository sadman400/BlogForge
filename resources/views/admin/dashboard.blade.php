<x-layout>
    <h1 class="text-3xl font-bold text-white">Dashboard page</h1>

    <div class="mt-4 bg-gray-700 p-8 rounded-lg">
        <form action="{{ route('posts.store') }}" method="post">
            @csrf

            <div class="mb-4 flex justify-center flex-col">
                <label for="title" class="text-white mb-3">Title</label>
                <input type="text" name="title" id="title" class="text-black w-full rounded-md px-4 py-2" placeholder="Enter your title" value="{{ old('title') }}">
            </div>

            <div class="mb-4 flex justify-center flex-col">
                <label for="body" class="text-white mb-3">Body</label>
                <textarea name="body" rows="5" id="body" class="text-black w-full rounded-md px-4 py-2" placeholder="Enter your body" value="{{ old('body') }}"></textarea>
            </div>


            @if (session('success'))
                <p class="text-yellow-600 mb-0 mt-1">{{ session('success') }}</p>
            @endif

            {{-- submit button  --}}
            <button type="submit" class="bg-blue-500 w-full hover:bg-blue-600 transition text-white px-4 mt-4 text-center py-2 rounded-md">Submit</button>
        </form>
    </div>


    <h1 class="text-3xl mt-10 font-bold text-white">Your Latest Post's</h1>

    @foreach ( $posts as $post)
        <x-PostCard :post="$post" />
    @endforeach

    <div class="mt-4">
        {{$posts->links()}}
    </div>


</x-layout>
