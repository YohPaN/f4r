@extends('layout')

@section('content')
<form method="POST" action="{{ route('songs.update', ['song' => $song->id]) }}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="title">Titre</label>
        <input class="form-control" type="text" id="title" name="title" value="{{ $song->title }}">
    </div>
    <div class="form-group">
        <label for="lyrics">Paroles</label>
        <input class="form-control" type="text" id="lyrics" name="lyrics" value="{{ $song->lyrics }}">
    </div>
    <div class='date' id='release_date'>
        <label for="release_date">Date de sortie</label>
        <input type='date' class="form-control" name="release_date" value="{{ $song->release_date }}">
    </div>
    <div class="form-group">
        <label for="traduction">Traduction</label>
        <input class="form-control" type="text" id="traduction" name="traduction" value="{{ $song->lyrics }}">
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="displaySong" name="displaySong">
        <label class="form-check-label" for="displaySong">Montrer le texte?</label>
        @error('displaySong')
            <div class="form-error"> {{ $message }} </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Mettre à jour la musique</button>
</form>
@endsection
