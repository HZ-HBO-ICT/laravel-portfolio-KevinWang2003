@extends('layout')

<head>
    <link rel="stylesheet" href="/css/faq.css">
    <title>Grade List</title>
</head>

@section('content')
    <main>
        <h1>Grade List</h1>
        <section>
            @foreach($grades as $grade)
                <button type="button" class="collapsible">
                    <h2>{{ $grade->name }}</h2>
                </button>
                <div class="content">
                    <p>Test: {{ $grade->test_name }}</p>
                    <p>Passing Grade: {{ $grade->lowest_passing_grade }}</p>
                    <p>Current Grade: {{ $grade->best_grade }}</p>
                    <p>Passed at: {{ $grade->passed_at }}</p>
                    <a href="{{ route('grades.edit', $grade) }}"><p>Edit</p></a>
                </div>
            @endforeach
            <script src="/js/faq.js"></script>
        </section>
    </main>
@endsection
