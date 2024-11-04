@props(['post'])

<div class="mt-4 bg-gray-700 p-8 rounded-lg">
    <h2 class="text-xl font-semibold text-white mb-3">{{$post->title}}</h2>
    <span class="text-sm text-yellow-400">{{$post->created_at->diffForHumans()}}</span>
    <span class="text-sm text-blue-300">by username</span>
    <p class="text-gray-300">{{$post->body}}</p>
</div>
