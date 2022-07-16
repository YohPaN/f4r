@extends('layout')

@section('content')
<div>
    <p>This is the index for news</p>
        <div>
            <h3>
                {{ $actuality['title'] }}
            </h3>
            <p> {{ $actuality['text'] }} </p>
        </div>
</div>
@endsection
