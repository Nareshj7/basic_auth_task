<form method="POST" action="{{ route('posts.update', $post) }}">
    @csrf
    @method('PUT') <!-- Use the PUT method for updating -->
    <label for="title">Title</label>
    <input type="text" name="title" id="title" value="{{ $post->title }}">
    <label for="content">Content</label>
    <textarea name="content" id="content">{{ $post->content }}</textarea>
    <button type="submit">Update Post</button>
</form>
