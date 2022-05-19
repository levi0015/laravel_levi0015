@extends('layouts.app')

@section('content')
    <h1 class="has-text-weight-bold is-size-3" style="margin: 25px 0px 0px 75px; color: black">New Frequently Asked Question</h1>
    <div class="wrapper">
        <div class="container">

            <form method="POST" action="{{ route('faqs.store') }}">
                @csrf
                <br>
                <div class="field">
                    <label class="label" for="question">Question</label>

                    <div class="control">
                        <textarea
                            class="input @error('question') is-danger @enderror"
                            type="text"
                            name="question"
                            id="question"
                        >{{ old('question') }}</textarea>

                        @error('question')
                            <p class="help is-danger">{{ $errors->first('question') }}</p>
                        @enderror
                    </div>
                </div><br>

                <div class="field">
                    <label class="label" for="answer">Answer</label>

                    <div class="control">
                        <textarea
                            class="input @error('answer') is-danger @enderror"
                            type="text"
                            name="answer"
                            id="answer"
                        >{{ old('answer') }}</textarea>

                        @error('answer')
                            <p class="help is-danger">{{ $errors->first('answer') }}</p>
                        @enderror
                    </div>
                </div><br>

                <div class="field">
                    <label class="label" for="link">Link</label>

                    <div class="control">
                        <textarea
                            class="input"
                            type="text"
                            name="link"
                            id="link"></textarea>
                    </div>
                </div><br><br>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>
                </div>

                <br>
            </form>

            <form action="{{ route('faqs.index') }}">
                @csrf
                <div class="field is-grouped">
                    <div class="control">
                        <button style="background-color: red" class="button is-link" type="submit">Cancel</button>
                    </div>
                </div>
                <br>
            </form>

        </div>
    </div>
@endsection
