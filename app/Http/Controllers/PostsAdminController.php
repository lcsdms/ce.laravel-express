<?php

namespace App\Http\Controllers;


use App\Http\Requests\PostRequest;
use App\Post;


class PostsAdminController extends Controller
{
    private $post;

    public function __construct(Post $post){
        $this->post = $post;
    }

    //Rota de redirecionamento para a pagina de listagem dos posts, com paginação
    public function index(){
        $posts = $this->post->paginate(10);
        return view('admin.posts.index',compact('posts'));
    }

    //Rota de redirecionamento para a página de Criação de um novo Post
    public function create(){
        return view('admin.posts.create');
    }

    //Função do controller para gravação dos dados, que vai receber um request POST
    public function store(PostRequest $request){

        //dd($request->all()); //Função para executar o dump do request e mostrar na tela, matando a aplicação

        //Cria um novo post com base no request enviado
        $this->post->create($request->all());

        //Apos a criação, redireciona para a página inicial
        return redirect()->route('admin.posts.index');
    }

    //Exibição da página de edição de um produto em especifico
    public function edit($id){
        $post = $this->post->find($id);
        return view('admin.posts.edit',compact('post'));
    }

    //Método para alteração de um produto em especifico, e após a alteração retorna para a listagem de produtos
    public function update($id, PostRequest $request){

        $this->post->find($id)->update($request->all());
        return redirect()->route('admin.posts.index');
    }

    public function destroy($id){
        //TODO necessário verificar a destruição de elements vinculados, neste caso os comentarios
        $this->post->find($id)->delete();
        return redirect()->route('admin.posts.index');
    }
}
