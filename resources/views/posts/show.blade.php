@extends('layouts.app')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->description }}</p>
    <p><small>Created at: {{ \Carbon\Carbon::parse($post->created_at)->format('d M Y') }}</small></p>

    <a href="{{ route('posts.index') }}">Back to Blog</a>
@endsection
