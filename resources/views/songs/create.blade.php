@extends('layout')

@section('content')
<form method="POST" action="{{ route('songs.store') }}">
    @csrf
    <div class="form-group">
        <label for="title">Titre</label>
        <input class="form-control" type="text" id="title" name="title">
        @error('title')
            <div class="form-error"> {{ $message }} </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="lyrics">Paroles</label>
        <input class="form-control" type="text" id="lyrics" name="lyrics">
        @error('lyrics')
            <div class="form-error"> {{ $message }} </div>
        @enderror
    </div>
    <div class='date' id='release_date'>
        <label for="release_date">Date de sortie</label>
        <input type='date' class="form-control" name="release_date">
        @error('release_date')
            <div class="form-error"> {{ $message }} </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="traduction">Traduction</label>
        <input class="form-control" type="text" id="traduction" name="traduction">
        @error('traduction')
            <div class="form-error"> {{ $message }} </div>
        @enderror
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="displaySong" name="displaySong" value="true">
        <label class="form-check-label" for="displaySong">Montrer le texte?</label>
        @error('displaySong')
            <div class="form-error"> {{ $message }} </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Ajouter la musique</button>
</form>
@endsection
