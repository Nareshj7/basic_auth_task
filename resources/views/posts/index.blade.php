@foreach ($posts as $post)
    <h1>{{$post->title}}</h1>

    @if ($post->user_id == auth()->user()->id)
        <a href="{{ route('posts.edit', $post) }}">Edit</a>
        <form method="POST" action="{{ route('posts.destroy', $post) }}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    @endif

    <a href="{{ route('posts.show', $post) }}">View Post</a>
@endforeach
