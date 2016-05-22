@extends('template')

@section('title')
    Administração dos Posts
@endsection
@section('content')
    <h1>Create new Post</h1>

    {{-- Exibição de erros nas páginas caso seja apresentado algum erro de validação por exemplo --}}
    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => 'admin.posts.store']) !!}

    @include('admin.posts._form')
    
    {!! Form::label('tags', 'Tags:', ['class' => 'control-label']) !!}
    {!! Form::textarea('tags', null, ['class' => 'form-control']) !!}
    
    {!! Form::submit('Salvar Post', ['class' => 'btn btn-primary']) !!}
        
    {!! Form::close() !!}
    
    
@endsection

