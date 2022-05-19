@extends('layouts.app')

@section('content')
    <h1 style="margin: 30px 0px 0px 75px">Frequently Asked Questions</h1><br><br>
    <div class="grid-container">
        <div class="left">
            <table style="max-width: 1000px" class="table tablebody">
                <tbody>
                    <tr>
                        <th style="font-weight: bold; font-size: 20px">The Question</th>
                    </tr>
                    <tr>
                        <td>{{ $faq->question }}</td>
                    </tr>
                    <tr>
                        <th id="emptycol" colspan="10"></th>
                    </tr>
                    <tr>
                        <th style="font-weight: bold; font-size: 20px">The Answer</th>
                    </tr>
                    <tr>
                        <td>{{ $faq->answer }}
                            @if($faq->link != null)
                                <a target="_blank" href="{{ $faq->link }}">Klik hier voor meer informatie</a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div>
                <br>
                <form action="{{ route('faqs.edit', $faq) }}">
                    <button style="width: 200px; height: 40px; background-color: #dd7700" type="submit">Edit the article
                    </button>
                </form>
            </div>
            <div>
                <br>
                <form action="{{ route('faqs.index') }}">
                    <button style="width: 200px; height: 40px; background-color: #cccccc" type="submit">Go Back</button>
                </form>
            </div>
        </div>
    </div>
@endsection
