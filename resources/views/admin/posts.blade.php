<x-layout>

    <h2 class="text-white ">Username</h2>

    @foreach ( $posts as $post)
        <x-PostCard :post="$post" />
    @endforeach

    <div class="mt-4">
        {{$posts->links()}}
    </div>

</x-layout>
