@extends('template')

@section('title')
    Administração dos Posts
@endsection
@section('content')
    <h1>Blog Admin</h1>

    <a href="{{route('admin.posts.create')}}" class="btn btn-success">Criar novo Post</a>
    <br><br>
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
                <td>
                    <a href="{{route('admin.posts.edit' ,['id' => $post->id])}}" class="btn btn-default">Editar</a>
                    <a href="{{route('admin.posts.destroy' ,['id' => $post->id])}}" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $posts->render() !!}
@endsection

