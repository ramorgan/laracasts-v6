@extends('layout')
@section('content')

    <div id="wrapper">
        <div id="page" class="container">
            <ul>
                @foreach($articles as $article)
                    <li><h3><a href="/articles/{{$article->id}}">{{$article->title}}</a></h3></li>
                @endforeach
            </ul>
        </div>
    </div>

@endsection