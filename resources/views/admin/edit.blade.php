<x-layout>
    <h1 class="text-white text-2xl">Edit your post</h1>


    <div class="mt-4 bg-gray-700 p-8 rounded-lg">
        <form action="{{ route('posts.update', $post) }}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-4 flex justify-center flex-col">
                <label for="title" class="text-white mb-3">Title</label>
                <input type="text" name="title" id="title" class="text-black w-full rounded-md px-4 py-2" placeholder="Enter your title" value="{{ $post->title }}">
            </div>

            <div class="mb-4 flex justify-center flex-col">
                <label for="body" class="text-white mb-3">Body</label>
                <textarea name="body" rows="10" id="body" class="text-black w-full rounded-md px-4 py-2" placeholder="Enter your body">{{$post->body}}</textarea>
            </div>

            {{-- submit button  --}}
            <button type="submit" class="bg-blue-500 w-full hover:bg-blue-600 transition text-white px-4 mt-4 text-center py-2 rounded-md">Update</button>
        </form>
    </div>
</x-layout>
