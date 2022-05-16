@extends('layout')

<head>
    <link rel="stylesheet" href="/css/create.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
</head>

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1 class="heading has-text-weight-bold is-size-4">Update Article</h1>

            <form method="POST" action="{{ route('faqs.update', $faq) }}">
                @csrf
                @method('PUT')
                <div class="field">
                    <label class="label" for="question">Question</label>

                    <div class="control">
                        <input
                            class="input @error('question') is-danger @enderror"
                            type="text"
                            name="question"
                            id="question"
                            value="{{ $faq->question }}"
                        >
                        @error('question')
                        <p class="help is-danger">{{ $errors->first('question') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="answer">Answer</label>

                    <div class="control">
                        <textarea
                            class="textarea @error('answer') is-danger @enderror"
                            name="answer"
                            id="answer"
                        >{{ $faq->answer }}</textarea>
                        @error('answer')
                        <p class="help is-danger">{{ $errors->first('answer') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="link">Link</label>

                    <div class="control">
                        <textarea class="textarea" name="link" id="link">{{ $faq->link }}</textarea>
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>

                    <div class="control">
                        <button class="button is-text">Cancel</button>
                    </div>
                </div>
            </form>
            <form method="POST" action="{{ route('faqs.destroy', $faq) }}">
                <div class="control">
                    @csrf
                    @method('DELETE')
                    <button class="button is-danger" type="submit">Delete</button>
                </div>
            </form>
        </div>
    </div>
@endsection
