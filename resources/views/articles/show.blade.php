@extends('layouts.app')

@section('title', 'Détails de l\'Article')

@section('content')
    <h1 class="mb-4">Détails de l'Article</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $article->title }}</h5>
            <p class="card-text">{{ $article->content }}</p>
            <p class="card-text"><small class="text-muted">Catégorie : {{ $article->category->name }}</small></p>
            <a href="{{ route('articles.index') }}" class="btn btn-primary">Retour à la liste</a>
        </div>
    </div>
@endsection
