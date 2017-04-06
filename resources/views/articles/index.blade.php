@extends('app')

@section('title')
    文章列表
@stop

@section('content')
    <h1>Articles</h1>

    @foreach( $articles as $article )
        <h4><a href="{{ action('ArticlesController@show', [$article -> id]) }}">{{ $article -> title }}</a></h4>
        <article>
            <div class="body">
                {{ $article -> content }}
            </div>
        </article>
    @endforeach
@stop