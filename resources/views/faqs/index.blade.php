@extends ('layout')

@section ('head')
    <title>Levi - FAQ</title>
    <link rel="stylesheet" type="text/css" href="CSS/faq.css">
    <link rel="stylesheet" type="text/css" href="CSS/dashboard.css">
@endsection

@section ('body')
    <h1>Frequently Asked Questions</h1>
    <div class="grid-container">
        <div class="left">
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
        <div class="right links">
            <img src="img/FAQ.jpg" width="450" height="315">
        </div>

    </div>
@endsection
