@foreach ($post->comments as $comment)
    <p>{{ $comment->content }}</p>
@endforeach
