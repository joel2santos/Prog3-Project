<x-layouts.app :title="$post->title" :meta-description="$post->body">
    <h1>Edit form</h1>

    <form action="{{ route('posts.update', $post)}}" method="POST">
        @csrf @method('PATCH')
        <x-forms.blog-fields :post="$post"/>
    </form>

    <a href="{{route('posts.index')}}">Return to list</a>
</x-layouts.app>