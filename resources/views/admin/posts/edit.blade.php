@extends('template')

@section('title')
    Administração dos Posts
@endsection
@section('content')
    <h1>Alterar Post {{ $post->title }}</h1>

    {{-- Exibição de erros nas páginas caso seja apresentado algum erro de validação por exemplo --}}
    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::model($post, ['route' => ['admin.posts.update', $post->id], 'method' => 'put']) !!}

    @include('admin.posts._form')

    {!! Form::label('tags', 'Tags:', ['class' => 'control-label']) !!}
    {!! Form::textarea('tags', $post->tagList , ['class' => 'form-control']) !!}
    
    {!! Form::submit('Salvar alterações', ['class' => 'btn btn-primary']) !!}
        
    {!! Form::close() !!}
    
    
@endsection

