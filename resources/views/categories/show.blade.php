@extends('layouts.app')

@section('title', 'Détails de la Catégorie')

@section('content')
    <h1 class="mb-4">Détails de la Catégorie</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $categorie->name }}</h5>
            <a href="{{ route('categories.index') }}" class="btn btn-primary">Retour à la liste</a>
        </div>
    </div>
@endsection
