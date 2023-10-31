<form method="POST" action="{{ route('comments.store', $post) }}">
    @csrf
    <label for="content">Comment</label>
    <textarea name="body" id="body"></textarea>
    <input type="hidden" name="post_id" value="{{ $post->id }}">
    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
    <button type="submit">Add Comment</button>
</form>
