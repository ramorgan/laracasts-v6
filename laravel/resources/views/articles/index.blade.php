@extends('layout')
@section('content')

    <div id="wrapper">
        <div id="page" class="container">
            <ul>
                @forelse($articles as $article)
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

                @empty
                    <p>No relevant article yet. Check back later.</p>
                @endforelse
            </ul>
        </div>
    </div>

@endsection