@extends('layout')
@section('content')

    <div id="wrapper">
        <div id="page" class="container">
            <ul>
                @foreach($articles as $article)
                    <li>
                        <div class="content">
                            <h2>
                                <a href="{{ $article->path() }}">
                                    {{$article->title}}
                                </a>
                            </h2>
                        </div>
                        <p>{{ $article->excerpt }}</p>
                    </li>

                @endforeach
            </ul>
        </div>
    </div>

@endsection