<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/test', function () {

    $name = request('name');

    return view('test', ['name' => $name]);
});


Route::get('/helloworld', function () {
    return "Hello World";
});

Route::get('/json', function () {
    return ['foo' => 'bar', 'message' => ['Hello World', 'Hi mom', 'Look no hands']];
});

/*
Route::get('/posts/{pid}', function ($pid) {
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
});
*/

Route::get('/posts/{pid}', 'PostsController@show');


Route::get('/contact', function(){
    return view('contact');
});


Route::get('/about', function(){
    return view('about');
});

