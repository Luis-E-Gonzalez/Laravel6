<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Category;
use App\Article;
use App\Images;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users=User::count();
        $category=Category::count();
        $article=Article::count();
        $image=Images::count();

        return view('index',[
            'users'=> $users,
            'category'=>$category,
            'article'=>$article,
            'image'=>$image
        ]);
    }
}
