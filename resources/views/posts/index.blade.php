@extends('template')

@section('content')
    <h1>Blog</h1>
    @foreach($posts as $post)
        <h2>{{$post->title}}</h2>
        <p>{{$post->content}}</p>
        <hr>
        <h3>Comments</h3>
        @foreach($post->comments as $comment)
            <b>Nome: {{ $comment->name }}</b>
            <b>Comment: {{ $comment->$comment }}</b>
        @endforeach
    @endforeach
@endsection