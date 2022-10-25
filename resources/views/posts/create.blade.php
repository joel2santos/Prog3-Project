<x-layouts.app title="Create" meta-description="Create a post">

    <h1>Create a new post</h1>

    <form action="{{ route('posts.store')}}" method="POST">
        @csrf

        <label>
            Title<br>
            <input name="title" type="text" value={{ old('title') }}>

            @error('title')
            <br>
                {{$message}}
            @enderror
        </label>
        <br>

        <label>
            Body<br>
            <textarea name="body"> {{old('body')}}</textarea>

            @error('body')
            <br>
                {{$message}}
            @enderror
        </label>
        <br>

        <button type="submit">Submit</button>
    </form>

    <a href="{{route('posts.index')}}">Return to list</a>
</x-layouts.app>