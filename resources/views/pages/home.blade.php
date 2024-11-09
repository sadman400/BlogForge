<x-layout>
    <h1 class="text-4xl font-bold text-white mb-8">Latest Posts</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach ($posts as $post)
            <x-PostCard :post="$post" />
        @endforeach
    </div>

    <div class="mt-8 flex justify-center">
        <div class="bg-gray-800 px-6 py-3 rounded-lg shadow-md">
            {{$posts->links('pagination::tailwind')}}
        </div>
    </div>

</x-layout>
