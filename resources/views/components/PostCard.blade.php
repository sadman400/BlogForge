@props(['post'])

<div class="mt-4 bg-gray-700 p-8 rounded-lg">
    <h2 class="text-xl font-semibold text-white mb-3">{{$post->title}}</h2>
    <span class="text-sm text-yellow-400">{{$post->created_at->diffForHumans()}}</span>
    <a href="{{route('user.posts', $post->user)}}" class="text-sm text-blue-300">by {{$post->user->username}}</a>
    <p class="text-gray-300">{{$post->body}}</p>
</div>
