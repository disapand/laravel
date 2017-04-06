@extends('app')

@section('title')
    新增文章
@stop

@section('content')
    <h1>编写新文章</h1>

    {!! Form::open(['url' => url('articles')]) !!}
    <div class="form-groups">
        {!! Form::label('title') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}

    </div>

    <div class="form-groups">
        {!! Form::label('content', 'Content:') !!}
        {!! Form:: textarea('content', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-groups">
        {!! Form::label('published_at') !!}
        {!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('发表文章', ['class' => 'btn btn-primary form-control']) !!}

    {!! Form::close() !!}

    @include('errors.list');

@stop

