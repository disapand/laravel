@extends('app')

@section('title')
    {{ $article -> title }}
@stop

@section('content')

    <h1>{{ $article -> title }}</h1>
    <article>
        <div class="body">
            {{ $article -> content }}
        </div>
    </article>

@stop