@extends('layout')

@section('content')
<div>
    <p>This is the index for news</p>
        <div>
            <p> {{ $live['date_live'] }}</p>
            <p> {{ $live['city'] }} </p>
            <p> {{ $live['place'] }} </p>
        </div>
</div>
@endsection
