<?php

namespace App\Http\Controllers;
use App\Article;
use App\Category;
use App\Images;
use Illuminate\Http\Request;

class ControllerArticle extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $articles = Article::latest()->paginate(25);
        return view('articles.index',[
            'articles'=> $articles
            ]);

    }

    public function add()
    {

        return view('articles.add');

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Article::create([
        'title'=>$request->title,
        'img'=>$request->img,
        'subtitle'=>$request->subtitle,
        'body'=>$request->body,
        'category_id'=>$request->category_id,
        'img_id'=>$request->img_id
        ]);
        return redirect('/category')->with('mesage', 'El articulo fue publicado exitosamente');
    }

    public function create()
    {
        $article = new Article;
        $categorias = Category::select('id', 'name')->orderBy('name')->get();
        $imagenes = Images::select('id', 'name')->orderBy('name')->get();
        return view('articles.add', compact('article', 'categorias', 'imagenes'));
    }


    public function delete(Article $article){
        $article->delete();
        return back();
    }

    public function show($id)
    {
        //obtines el article 
        $article = Article::find($id);

        return $article;

        return view('article.show',[
            '$articel' => $article
        ]);

    }
}
