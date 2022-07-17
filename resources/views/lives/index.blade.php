@extends('layout')

@section('content')
<div>

    @if (count($lives) > 0)
        @foreach ($lives as $live)
            @if ($live['displayLive'] == 1)
                <div>
                    <a href="{{ route('lives.show', ['live'=>$live->id]) }}">{{ $live['live_date'] }}</a>
                    <p> {{ $live['city'] }} </p>
                    <p> {{ $live['place'] }} </p>
                </div>
            @endif
        @endforeach
    @else
        <h2>There is no lives to display</h2>
    @endif

</div>
@endsection
