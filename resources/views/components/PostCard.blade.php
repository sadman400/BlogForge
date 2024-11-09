@props(['post', 'full' => false])

<div class="mt-6 bg-gray-900 p-8 rounded-lg shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
    <h2 class="text-2xl font-semibold text-white mb-3">{{ $post->title }}</h2>
    <div class="flex items-center gap-4 mb-4">
        <span class="text-sm text-yellow-400">{{ $post->created_at->diffForHumans() }}</span>
        <span class="text-sm text-gray-500">|</span>
        <a href="{{ route('user.posts', $post->user) }}" class="text-sm text-teal-400 hover:text-teal-300">{{ $post->user->username }}</a>
    </div>

    @if ($full)
        <p class="text-gray-300">{{ $post->body }}</p>
    @else
        <p class="text-gray-300">{{ Str::words($post->body, 35) }}</p>
        <a href="{{ route('posts.show', $post->id) }}" class="text-teal-500 hover:text-teal-400 mt-3 inline-block transition duration-300">Read more</a>
    @endif

    <div class="mt-6">
        {{$slot}}
    </div>
</div>
