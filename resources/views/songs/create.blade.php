@extends('layout')

@section('content')
<form method="POST" action="{{ route('songs.store') }}">
    @csrf
    <div class="form-group">
        <label for="title">Titre</label>
        <input class="form-control" type="text" id="title" name="title">
    </div>
    <div class="form-group">
        <label for="lyrics">Paroles</label>
        <input class="form-control" type="text" id="lyrics" name="lyrics">
    </div>
    <!--<div class='date' id='year_made'>
        <label for="year_made">Date de sortie</label>
        <input type='date' class="form-control" name="year_made">
    </div>-->
    <div class="form-group">
        <label for="traduction">Traduction</label>
        <input class="form-control" type="text" id="traduction" name="traduction">
    </div>
    <!--<div class="form-check">
        <input type="checkbox" class="form-check-input" id="displaySong" name="displaySong">
        <label class="form-check-label" for="displaySong">Montrer le texte?</label>
    </div>-->
    <button type="submit" class="btn btn-primary">Ajouter la musique</button>
</form>
@endsection
