<x-layouts.app :title="$post->title" :meta-description="$post->body">
    <h1>{{$post->title}}</h1>
    <h3>{{$post->body}}</h3>
    <a href="{{route('posts.index')}}">Return to list</a>
</x-layouts.app>