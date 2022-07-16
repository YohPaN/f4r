@extends('layout')

@section('content')
<div>

    @if (count($actualities) > 0)
        @foreach ($actualities as $actuality)
            @if ($actuality['displayActuality'] == 1)
                <div>
                    <h3>
                        <a href="{{ route('actualities.show', ['actuality' => $actuality->id]) }}">{{ $actuality['title'] }}</a>
                    </h3>actualy
                    <p> {{ $actuality['text'] }} </p>
                    <p> {{ $actuality['displayActuality'] }} </p>
                </div>
            @endif
        @endforeach
    @else
        <h2>There is no news to display</h2>
    @endif

</div>
@endsection
