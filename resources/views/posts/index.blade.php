@extends('layouts.app')

@section('content')
    <h1>Blog Posts</h1>
    @foreach ($posts as $post)
        <div>
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->description }}</p>
            <p><small>Created At: {{ \Carbon\Carbon::parse($post->created_at)->format('d M Y') }}</small></p>
            <a href="{{ route('posts.show', $post->id) }}">Read More</a>
            <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    @endforeach

    {{ $posts->links() }}  <!-- Pagination links -->
@endsection
