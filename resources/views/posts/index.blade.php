<x-layouts.app title="Blog" meta-desc="My blog">

    @if (session('status'))
        {{ session('status') }}
    @endif

    <h1>Blog</h1>
    <a href="{{route('posts.create')}}">Create new post</a>

    @foreach ($posts as $post)
        <h2>
            <a href="{{route('posts.show', $post)}}">
                {{$post->title}}
            </a>
        </h2>
    @endforeach

</x-layouts.app>