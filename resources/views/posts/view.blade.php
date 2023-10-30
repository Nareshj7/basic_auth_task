<x-app-layout>
    @if ($posts)
    <ul>
        @foreach($posts as $post)
        <li>
            <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
        </li>
        @endforeach
    </ul>
    @else
    <p>You haven't created any posts yet.</p>
    @endif
</x-app-layout>