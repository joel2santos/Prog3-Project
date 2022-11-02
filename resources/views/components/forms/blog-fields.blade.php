
<label>
    Title<br>
    <input name="title" type="text" value={{ old('title', $post->title) }}>

    @error('title')
    <br>
        {{$message}}
     @enderror
</label>
<br>
<label>
    Body<br>
    <textarea name="body"> {{old('body', $post->body)}}</textarea>

    @error('body')
    <br>
        {{$message}}
    @enderror
</label>
<br>
<button type="submit">Submit</button>
