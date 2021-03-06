@extends('layout')

@section('content')
<form method="POST" action="{{ route('actualities.store') }}">
    @csrf
    <div class="form-group">
        <label for="title">Titre</label>
        <input class="form-control" type="text" id="title" name="title">
        @error('title')
            <div class="form-error"> {{ $message }} </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="text">Text</label>
        <input class="form-control" type="text" id="text" name="text">
        @error('text')
            <div class="form-error"> {{ $message }} </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="picture" class="form-label">Ajouter une photo</label>
        <input class="form-control" type="file" id="picture" name="picture">
        @error('picture')
            <div class="form-error"> {{ $message }} </div>
        @enderror
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="displayActuality" name="displayActuality" value="true">
        <label class="form-check-label" for="displayActuality">Montrer la news?</label>
        @error('displayActuality')
            <div class="form-error"> {{ $message }} </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Ajouter la news</button>
</form>
@endsection
