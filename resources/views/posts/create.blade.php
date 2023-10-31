<form method="POST" action="{{ route('posts.store') }}">
    @csrf
    <label for="title">Title</label>
    <input type="text" name="title" id="title">
    <label for="content">Content</label>
    <textarea name="content" id="content"></textarea>
    <button type="submit">Create Post</button>
</form>
