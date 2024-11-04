<x-layout>

    <h1 class="text-3xl font-bold text-white">Latest Posts</h1>

    @foreach ( $posts as $post)
        <x-PostCard :post="$post" />
    @endforeach

    <div class="mt-4">
        {{$posts->links()}}
    </div>

</x-layout>
