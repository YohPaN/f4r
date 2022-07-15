@extends('layout')

@section('content')
<div>

    @if (count($songs) > 0)
        @foreach ($songs as $song)
        <div>
            <h3>
                <a href="{{ route('songs.show', ['song' => $song->id]) }}">{{ $song['title'] }}</a>
            </h3>
            <p> {{ $song['lyrics'] }} </p>
        </div>
        @endforeach
    @else
        <h2>There is no song to display</h2>
    @endif

</div>
@endsection
