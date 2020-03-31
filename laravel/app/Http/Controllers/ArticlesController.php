<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;


class ArticlesController extends Controller
{
    public function show($id)
    {
        // show a single resource.
        $article = Article::find($id);

        return view('articles.show', ['article' => $article]);
    }

    public function index()
    {
        // render a list of a resource.
        $articles = [];

        $articles = Article::take(3)->latest()->get();

        return view('articles.index', ['articles' => $articles]);
    }


    public function create()
    {
        // shows a view to create a resource.
        return view('articles.create');
    }

    public function store()
    {
        // Persist the new resource.
//        dump(\request()->all());
        $article = new Article();
        $article->title = Request('title');
        $article->excerpt = Request('excerpt');
        $article->body = Request('body');

        $article->save();

        return redirect('/articles');
    }

    protected function edit()
    {
        // Show a form to edit an existing resource.
    }

    protected function update()
    {
        // Persist the edit resource.
    }

    protected function destroy()
    {
        // Delete the resource.
    }
}
