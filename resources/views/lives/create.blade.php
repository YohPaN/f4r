@extends('layout')

@section('content')
<form method="POST" action="{{ route('lives.store') }}">
    @csrf
    <div class="form-group">
        <label for="live_date">Date</label>
        <input class="form-control" type="date" id="live_date" name="live_date">
        @error('live_date')
            <div class="form-error"> {{ $message }} </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="city">Ville</label>
        <input class="form-control" type="text" id="city" name="city">
        @error('city')
            <div class="form-error"> {{ $message }} </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="place">Lieux</label>
        <input class="form-control" type="text" id="place" name="place">
        @error('place')
            <div class="form-error"> {{ $message }} </div>
        @enderror
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="displayLive" name="displayLive" value="true">
        <label class="form-check-label" for="displayLive">Montrer la date?</label>
        @error('displayLive')
            <div class="form-error"> {{ $message }} </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Ajouter la date</button>
</form>
@endsection
