@extends('layouts.app')

@section('title', 'Créer une Catégorie')

@section('content')
    <h1 class="mb-4">Créer une Catégorie</h1>

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nom de la catégorie</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Créer</button>
    </form>
@endsection
