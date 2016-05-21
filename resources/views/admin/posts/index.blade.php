@extends('template')

@section('title')
    Administração dos Posts
@endsection
@section('content')
    <h1>Blog Admin</h1>

    <table class="table">
        <tr>
            <th>ID</th>
            <th>TITLE</th>
            <th>ACTION</th>
        </tr>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td> </td>
            </tr>
        @endforeach
    </table>

    {!! $posts->render() !!}
@endsection

