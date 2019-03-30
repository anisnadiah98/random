<ul>
    @foreach ($posts as $post)
    <li>
        <a href="{{ route('post.edit', $post) }}">
            {{ $post->title }}
        </a>
        <img width="100" src="{{ asset('storage/'.$post->image) }}" alt="">
    </li>        
    @endforeach
</ul>

<a href="{{ route('post.create') }}">Add post</a>