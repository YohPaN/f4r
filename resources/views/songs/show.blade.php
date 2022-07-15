@extends('layout')

@section('content')
<div>
    <p>This is the index for songs</p>
        <div>
            <h3>
                {{ $song['title'] }}
            </h3>
            <p> {{ $song['lyrics'] }} </p>
        </div>
</div>
@endsection
