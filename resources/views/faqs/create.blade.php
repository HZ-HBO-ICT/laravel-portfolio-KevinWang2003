@extends('layout')

<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
</head>>

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1 class="heading has-text-weight-bold is-size-4">New FAQ</h1>

            <form method="POST" action="{{ route('faqs.store') }}">
                @csrf
                <div class="field">
                    <label class="label" for="question">Question</label>

                    <div class="control">
                        <input
                            class="input @error('question') is-danger @enderror"
                            type="text"
                            name="question"
                            id="question"
                            value="{{ old('question') }}"
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
                        >{{ old('answer') }}</textarea>
                        @error('answer')
                        <p class="help is-danger">{{ $errors->first('answer') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="link">Link (Optional)</label>

                    <div class="control">
                        <textarea
                            class="textarea"
                            name="link"
                            id="link"
                        >{{ old('link') }}</textarea>
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
        </div>
    </div>
@endsection
