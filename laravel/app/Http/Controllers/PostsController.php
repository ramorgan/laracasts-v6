<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show($pid)
    {
        $post = [
            0 => "Hello World, this is my first blog post",
            1 => "Now I'm getting the hang of this blogging thing"
        ];

        if (!array_key_exists($pid, $post)) {
            abort(404, 'Sorry, that post was not found.');
        }

        return view('post', [
            'post' => $post[$pid]
        ]);
    }
}
