<x-layouts.app title="Blog" meta-desc="My blog">

    @if (session('status'))
        {{ session('status') }}
    @endif

    <h1>Blog</h1>

    @auth
    <a href="{{route('posts.create')}}">Create new post</a>
    @endauth

    @foreach ($posts as $post)
    <div style="display: flex; align-items: baseline">
        <h2>
            <a href="{{route('posts.show', $post)}}">
                {{$post->title}}
            </a>
        </h2> &nbsp;

        @auth
        <div>
            <a href="{{ route('posts.edit', $post)}}">Edit</a>

            <form action="{{ route('posts.destroy', $post)}}" method="POST">
                @csrf @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
        @endauth
    <div>
    @endforeach

</x-layouts.app>