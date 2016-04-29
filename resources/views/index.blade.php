@extends('template')

@section('title')
    Home - Blog Code Education
@endsection

@section('content')
    <h1>Últimos posts do blog</h1>

    <?php
        $blogPosts = array(
            array(
                "id" => 1,
                "titulo" => "Primeiro Post",
                "data" => "01/03/2016",
                "autor" => "Lucas Dimas",
                "descricao" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum eum explicabo facilis in optio? Blanditiis, dicta fuga fugiat id impedit minus molestiae, mollitia neque nesciunt quas rerum similique sunt ullam."
            ),
            array(
                "id" => 2,
                "titulo" => "Segundo Post",
                "data" => "26/02/2016",
                "autor" => "Lucas Dimas",
                "descricao" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum eum explicabo facilis in optio? Blanditiis, dicta fuga fugiat id impedit minus molestiae, mollitia neque nesciunt quas rerum similique sunt ullam."
            ),
            array(
                "id" => 3,
                "titulo" => "Terceiro Post",
                "data" => "20/02/2016",
                "autor" => "Lucas Dimas",
                "descricao" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum eum explicabo facilis in optio? Blanditiis, dicta fuga fugiat id impedit minus molestiae, mollitia neque nesciunt quas rerum similique sunt ullam."
            )
        );
    ?>

    <div class="col-sm-8" blog-main>
        @foreach($blogPosts as $post)
                <div class="blog-post">
                    <h2><a href="/post/{{ $post['id'] }}">{{ $post['titulo'] }}</a></h2>
                    <p class="author">Por {{ $post["autor"] }}, em {{ $post["data"] }}</p>
                    <br>
                    <p class="texto-post">{{$post["descricao"]}}</p>
                    <a href="/post/{{ $post['id'] }}"><button class="btn btn-default">Ler Mais</button></a>
                </div>
                <hr>
        @endforeach
    </div>
@endsection