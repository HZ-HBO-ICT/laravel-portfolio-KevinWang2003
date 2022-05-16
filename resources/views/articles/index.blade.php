@extends('layout')

@section('head')
    <link rel="stylesheet" href="/css/blog.css">
    <title>Blog</title>
@endsection

@section('content')
    <main>
        <section class="blog">
            <h1>Blog</h1>
            @foreach($articles as $article)
            <button type="button" class="collapsible">{{ $article->title }}</button>
            <div class="content">
                <p>{{ $article->excerpt }}</p>
                <a href="{{ route('articles.show', $article) }}"><p>Lees meer..</p></a>
                <a href="{{ route('articles.edit', $article) }}"><p>Edit</p></a>
            </div>
            @endforeach
            <script src="/js/faq.js"></script>
        </section>
    </main>
@endsection
