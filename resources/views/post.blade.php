
@extends('layouts.main')

@section('container')

    <article>
        <h3>{{ $post['judul'] }}</h3>
        <h5>by : {{ $post['author'] }}</h5>
        <p>{{ $post['body'] }}</p>
    </article>

    <a href="/blog">Back to posts</a>
    
@endsection