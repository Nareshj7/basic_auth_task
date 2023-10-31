Title: <h1>{{ $post->title }}</h1>
Content: <h2>{{ $post->content }}</h2>

@auth
    <a href="{{ route('comments.create', ['post' => $post->id]) }}" class="btn btn-primary">Add Comment</a>
    <br />
@endauth

Comments:
@if(count($post->comments) == 0)
    <p>No comments to display</p>
@else
    @foreach ($post->comments as $comment)
        <p>{{ $comment->body }}</p>
        @auth
            @if ($comment->user_id == auth()->user()->id)
                <a href="{{ route('comments.edit', $comment) }}">Edit</a>
                <form method="POST" action="{{ route('comments.destroy', $comment) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            @endif
        @endauth
    @endforeach
@endif
