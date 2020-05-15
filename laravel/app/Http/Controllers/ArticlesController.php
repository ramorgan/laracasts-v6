<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;


class ArticlesController extends Controller
{
    public function show(Article $article)
    {

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

        request()->validate(
            [
                'title' => ['required','alpha_num','min:3','max:255'],
                'excerpt' => 'required',
                'body' => 'required',
            ]
        );


        // Persist the new resource.

        $article = new Article();
        $article->title = Request('title');
        $article->excerpt = Request('excerpt');
        $article->body = Request('body');

        $article->save();

        return redirect('/articles');
    }

    protected function edit(Article $article){

        return view('articles.edit', compact('article'));
    }

    protected function update(Article $article)
    {
        request()->validate(
            [
                'title' => ['required','alpha_num','min:3','max:255'],
                'excerpt' => 'required',
                'body' => 'required',
            ]
        );

        // Persist the edit resource.
        $article->title = Request('title');
        $article->excerpt = Request('excerpt');
        $article->body = Request('body');

        $article->save();

        Article::create([
            'title' => \request('title'),
            'excerpt' => \request('excerpt'),
            'body' => \request('body'),

        ]);

        return redirect("/articles/$article->id");

    }

    protected function destroy(Article $article)
    {
        // Delete the resource.
    }
}
