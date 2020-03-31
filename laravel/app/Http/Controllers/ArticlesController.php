<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;



class ArticlesController extends Controller
{
    public function show($id)
    {
        $article = Article::find($id);

        return view('articles.show', ['article' => $article]);
    }

    public function list()
    {
        $articles = [];

        $articles = Article::take(3)->latest()->get();
        return view('articles.list', ['articles' => $articles]);
    }
}
