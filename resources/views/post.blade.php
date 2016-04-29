@extends("template")

<?php
$blogPosts = array(
        array(
                "id" => 1,
                "titulo" => "Primeiro Post",
                "data" => "01/03/2016",
                "autor" => "Lucas Dimas",
                "descricao" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum eum explicabo facilis in optio? Blanditiis, dicta fuga fugiat id impedit minus molestiae, mollitia neque nesciunt quas rerum similique sunt ullam.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum eum explicabo facilis in optio? Blanditiis, dicta fuga fugiat id impedit minus molestiae, mollitia neque nesciunt quas rerum similique sunt ullam.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum eum explicabo facilis in optio? Blanditiis, dicta fuga fugiat id impedit minus molestiae, mollitia neque nesciunt quas rerum similique sunt ullam.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum eum explicabo facilis in optio? Blanditiis, dicta fuga fugiat id impedit minus molestiae, mollitia neque nesciunt quas rerum similique sunt ullam."
        ),
        array(
                "id" => 2,
                "titulo" => "Segundo Post",
                "data" => "26/02/2016",
                "autor" => "Lucas Dimas",
                "descricao" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum eum explicabo facilis in optio? Blanditiis, dicta fuga fugiat id impedit minus molestiae, mollitia neque nesciunt quas rerum similique sunt ullam.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum eum explicabo facilis in optio? Blanditiis, dicta fuga fugiat id impedit minus molestiae, mollitia neque nesciunt quas rerum similique sunt ullam.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum eum explicabo facilis in optio? Blanditiis, dicta fuga fugiat id impedit minus molestiae, mollitia neque nesciunt quas rerum similique sunt ullam.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum eum explicabo facilis in optio? Blanditiis, dicta fuga fugiat id impedit minus molestiae, mollitia neque nesciunt quas rerum similique sunt ullam.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum eum explicabo facilis in optio? Blanditiis, dicta fuga fugiat id impedit minus molestiae, mollitia neque nesciunt quas rerum similique sunt ullam."
        ),
        array(
                "id" => 3,
                "titulo" => "Terceiro Post",
                "data" => "20/02/2016",
                "autor" => "Lucas Dimas",
                "descricao" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum eum explicabo facilis in optio? Blanditiis, dicta fuga fugiat id impedit minus molestiae, mollitia neque nesciunt quas rerum similique sunt ullam.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum eum explicabo facilis in optio? Blanditiis, dicta fuga fugiat id impedit minus molestiae, mollitia neque nesciunt quas rerum similique sunt ullam.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum eum explicabo facilis in optio? Blanditiis, dicta fuga fugiat id impedit minus molestiae, mollitia neque nesciunt quas rerum similique sunt ullam.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum eum explicabo facilis in optio? Blanditiis, dicta fuga fugiat id impedit minus molestiae, mollitia neque nesciunt quas rerum similique sunt ullam.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum eum explicabo facilis in optio? Blanditiis, dicta fuga fugiat id impedit minus molestiae, mollitia neque nesciunt quas rerum similique sunt ullam."
        )
);

?>

@section("title")
    @foreach($blogPosts as $key => $post)
        @if($post['id'] == $idPost)
            {{$post['titulo']}}
        @endif
    @endforeach
@endsection

@section('content')


    @foreach($blogPosts as $key => $post)
        @if($post['id'] == $idPost)
            <div>
                <h1>{{$post['titulo']}}</h1>
                <p class="author">Por {{ $post["autor"] }}, em {{ $post["data"] }}</p>
                <br>
                <p class="texto-post">{{$post["descricao"]}}</p>
                <a href="/"><button class="btn btn-default">Voltar para página principal</button></a>
            </div>
        @endif
    @endforeach
@endsection