@extends('layouts.main')

@section('container')


    @foreach ($posts as $post)

    <article>
        <h3>
            <a href="/posts/{{ $post['slug'] }}">{{ $post['judul'] }}</h3></a>
        <h5>by : {{ $post['author'] }}</h5>
        <p>{{ $post['body'] }}</p>
    </article>
        
    @endforeach
    
@endsection