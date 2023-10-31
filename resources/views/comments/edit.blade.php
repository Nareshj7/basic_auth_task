<form method="POST" action="{{ route('comments.update', $comment) }}">
    @csrf
    @method('PUT') 
    <label for="content">Comment</label>
    <textarea name="body" id="body">{{ $comment->body }}</textarea>
    <button type="submit">Update Comment</button>
</form>
