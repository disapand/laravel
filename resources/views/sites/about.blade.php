@extends('app')

@section('title')
    测试主题
@stop

@section('content')

    <h3>用名字做测试</h3>

    @if( count($name) > 0)
        <ul>
            @foreach( $name as $i)
                <li>{{ $i }}</li>
            @endforeach
        </ul>
    @endif

@stop