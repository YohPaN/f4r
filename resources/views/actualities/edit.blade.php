@extends('layout')

@section('content')
<form method="POST" action="{{ route('actualities.update', ['actuality' => $actuality->id]) }}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="title">Titre</label>
        <input class="form-control" type="text" id="title" name="title" value="{{ $actuality->title }}">
    </div>
    <div class="form-group">
        <label for="text">Text</label>
        <input class="form-control" type="text" id="text" name="text" value="{{ $actuality->text }}">
    </div>
    <!--<div class='date' id='release_date'>
        <label for="release_date">Date de sortie</label>
        <input type='date' class="form-control" name="release_date" value="{{ $actuality->release_date }}">
    </div>-->
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="displayActuality" name="displayActuality">
        <label class="form-check-label" for="displayActuality">Montrer la news?</label>
        @error('displayActuality')
            <div class="form-error"> {{ $message }} </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Mettre à jour la news</button>
</form>
@endsection
