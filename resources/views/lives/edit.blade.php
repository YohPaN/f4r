@extends('layout')

@section('content')
<form method="POST" action="{{ route('lives.update', ['live' => $live->id]) }}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="live_date">Date</label>
        <input class="form-control" type="text" id="live_date" name="live_date" value="{{ $live->live_date }}">
        @error('live_date')
            <div class="form-error"> {{ $message }} </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="city">Ville</label>
        <input class="form-control" type="text" id="city" name="city" value="{{ $live->city }}">
        @error('city')
            <div class="form-error"> {{ $message }} </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="place">Lieu</label>
        <input class="form-control" type="text" id="place" name="place" value="{{ $live->place }}">
        @error('place')
            <div class="form-error"> {{ $message }} </div>
        @enderror
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="displayLive" name="displayLive">
        <label class="form-check-label" for="displayLive">Montrer la news?</label>
        @error('displayLive')
            <div class="form-error"> {{ $message }} </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Mettre à jour la news</button>
</form>
@endsection
