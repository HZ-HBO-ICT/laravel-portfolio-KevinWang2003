@extends('layout')

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
</head>

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1 class="heading has-text-weight-bold is-size-4">Update Grade</h1>

            <form method="POST" action="/grades/{{ $grade->id }}">
                @csrf
                @method('PUT')
                <div class="field">
                    <label class="label" for="course_name">Course Name</label>

                    <div class="control">
                        <input
                            class="input @error('course_name') is-danger @enderror"
                            type="text"
                            name="course_name"
                            id="course_name"
                            value="{{ $grade->course_name }}"
                        >
                        @error('course_name')
                        <p class="help is-danger">{{ $errors->first('course_name') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="test_name">Test Name</label>

                    <div class="control">
                        <input
                            class="input @error('test_name') is-danger @enderror"
                            name="test_name"
                            id="test_name"
                            value="{{ $grade->test_name }}"
                        >
                        @error('test_name')
                        <p class="help is-danger">{{ $errors->first('test_name') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="grade">Grade</label>

                    <div class="control">
                        <input
                            class="input @error('best_grade') is-danger @enderror"
                            name="best_grade"
                            id="best_grade"
                            value="{{ $grade->best_grade }}"
                        >
                        @error('best_grade')
                        <p class="help is-danger">{{ $errors->first('best_grade') }}</p>
                        @enderror
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
            <form method="POST" action="/grades/{{ $grade->id }}">
                <div class="control">
                    @csrf
                    @method('DELETE')
                    <button class="button is-danger" type="submit">Delete</button>
                </div>
            </form>
        </div>
    </div>
@endsection
