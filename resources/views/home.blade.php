@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>

            <form action="{{ route('faqs.create') }}">
                <button style="width: 200px; height: 40px; background-color: #00dd00" type="submit">Create a new FAQ</button>
            </form><br><br>

            <table class="table tablebody">
                <thead>
                <tr>
                    <th class="faqwidth">The Question</th>
                    <th>The Answer</th>
                </tr>
                </thead>
                <tbody>
                @foreach($faqs as $faq)
                    <tr>
                        <td><a style="color: black" href="{{ route('faqs.show', $faq) }}">{{ $faq->question }}</td>
                        <td>{{ $faq->answer }}
                            @if($faq->link != null)
                                <a target="_blank" href="{{ $faq->link }}">Klik hier voor meer informatie</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
