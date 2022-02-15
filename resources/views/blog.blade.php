@extends('layout')

<head>
    <link rel="stylesheet" href="css/blog.css">
    <title>Blog</title>
</head>

@section('content')
    <main>
        <section class="blog">
            <h1>Blog</h1>
            @foreach($articles as $article)
            <button type="button" class="collapsible">{{ $article->title }}</button>
            <div class="content">
                <p>{{ $article->excerpt }}</p>
                <a href="/articles/{{ $article->id }}"><p>Lees meer..</p></a>
            </div>
            @endforeach
            <script src="js/faq.js"></script>
        </section>
    </main>
@endsection
