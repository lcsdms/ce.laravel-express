@extends('template')

@section('title')
    Administração dos Posts
@endsection
@section('content')
    <h1>Create new Post</h1>

    {!! Form::open(['route' => 'admin.posts.store']) !!}

    <div class="form-group">
        {!! Form::label('title','Title:') !!}
        {!! Form::text('title',null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('content', 'Content:') !!}
        {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
    </div>
    
    {!! Form::submit('Salvar Post', ['class' => 'btn btn-primary']) !!}
        
    {!! Form::close() !!}
    
    
@endsection

