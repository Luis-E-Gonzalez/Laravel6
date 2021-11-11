<?php

namespace App\Http\Controllers;
use App\Article;
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

        $articles = Article::all();
        return view('articles.index',[
            'articles'=> $articles
            ]);

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        Article::create([
        'title'=>$request->title,
        'img'=>$request->img,
        'subtitle'=>$request->subtitle,
        'body'=>$request->body,
        'category_id'=>$request->category_id,
        'img_id'=>$request->img_id
        ]);
        return redirect('/category')->with('mesage', 'la categoria se ha agregado exitosamente!');
    }


    public function delete(Article $article){
        $article->delete();
        return back();
    }
}
