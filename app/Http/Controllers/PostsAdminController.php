<?php

namespace App\Http\Controllers;


use App\Http\Requests\PostRequest;
use App\Post;
use App\Tag;


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


        //dd($tagsIDs); //Função para executar o dump do request e mostrar na tela, matando a aplicação

        //Cria um novo post com base no request enviado
        $post = $this->post->create($request->all());
        $post->tags()->sync($this->getTagsIDs($request->tags));

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
        $post = $this->post->find($id);
        $post->tags()->sync($this->getTagsIDs($request->tags));
        return redirect()->route('admin.posts.index');
    }

    public function destroy($id){
        //TODO necessário verificar a destruição de elements vinculados, neste caso os comentarios
        $this->post->find($id)->delete();
        return redirect()->route('admin.posts.index');
    }

    private function getTagsIDs($tags){
        //Trata os arrays, e limpa os mesmos
        //Explode as tags para Array, faz trim, e depois filter para limpar as tags
        $tagList = array_filter(array_map('trim',explode(',',$tags)));

        $tagsIDs = [];
        foreach($tagList as $tagName){
            $tagsIDs[] = Tag::firstOrCreate(['name' => $tagName])->id;
        }

        return $tagsIDs;
    }
}
