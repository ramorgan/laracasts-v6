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

        $validatedAttributes = $this->validateArticle();

        Article::create($validatedAttributes);
        return redirect(route('articles.index'));
    }

    protected function edit(Article $article){

        return view('articles.edit', compact('article'));
    }


    protected function update(Article $article)
    {
        $validatedAttributes = $this->validateArticle();

        $article->update($validatedAttributes);

        return redirect($article->path());

    }

    protected function destroy(Article $article)
    {
        // Delete the resource.
    }

    protected function validateArticle()
    {
        return request()->validate(
            [
                'title' => ['required', 'min:3', 'max:255'],
                'excerpt' => 'required',
                'body' => 'required',
            ]
        );
    }
}
