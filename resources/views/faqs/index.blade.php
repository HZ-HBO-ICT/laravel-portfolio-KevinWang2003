@extends('layout')

<head>
    <link rel="stylesheet" href="/css/faq.css">
    <title>FAQ</title>
</head>

@section('content')
    <main>
        <h1>Frequently Asked Questions</h1>
        <section>
            @foreach($faqs as $faq)
                <button type="button" class="collapsible">
                    <h2>{{ $faq->question }}</h2>
                </button>
                <div class="content">
                    @if(!$faq->link == null);
                    <p><a href="//{{ $faq->link }}" target="_blank">{{ $faq->answer }}</a></p>
                    @else;
                    <p>{!! $faq->answer !!}</p>
                    @endif
                    <a href="{{ route('faqs.edit', $faq) }}"><p>Edit</p></a>
                </div>
            @endforeach
            <script src="/js/faq.js"></script>
        </section>
    </main>
@endsection

