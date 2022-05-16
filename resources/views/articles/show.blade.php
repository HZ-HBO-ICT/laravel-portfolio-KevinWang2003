@extends('layout')

<style>
    p {
        font-family: Calibri;
        font-size: 20px;
        color: white;
        position: relative;
        text-align: center;
    }
</style>

@section('content')

    <h1>{{ $article->title }}</h1>
    <p>{!! $article->body !!}</p>


@endsection
