<x-layouts.app title="Create" meta-description="Create a post">
    <h1>Create a new post</h1>

    <form action="{{ route('posts.store', $post)}}" method="POST">
        @csrf
        <x-forms.blog-fields :post="$post"/>
    </form>

    <a href="{{route('posts.index')}}">Return to list</a>
</x-layouts.app>