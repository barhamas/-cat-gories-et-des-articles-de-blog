@extends('layouts.app')

@section('title', 'Liste des Articles')

@section('content')
    <h1 class="mb-4">Liste des Articles</h1>

    <form action="{{ route('articles.index') }}" method="GET" class="form-inline mb-3">
        <input type="text" name="search" class="form-control mr-2" placeholder="Rechercher un article" value="{{ request('search') }}">
        <button type="submit" class="btn btn-primary">Rechercher</button>
    </form>

    <a href="{{ route('articles.create') }}" class="btn btn-success mb-3">Créer un nouvel article</a>

    <div class="list-group">
        @foreach ($articles as $article)
            <a href="{{ route('articles.show', $article->id) }}" class="list-group-item list-group-item-action">
                {{ $article->title }}
                <span class="float-right">
                    <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-sm btn-warning">Modifier</a>
                    <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Supprimer</button>
                    </form>
                </span>
            </a>
        @endforeach
    </div>

    {{ $articles->links('pagination::bootstrap-4') }}
@endsection
