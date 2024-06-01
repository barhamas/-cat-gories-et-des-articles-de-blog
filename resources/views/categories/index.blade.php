@extends('layouts.app')

@section('title', 'Liste des Catégories')

@section('content')
    <h1 class="mb-4">Liste des Catégories</h1>

    <form action="{{ route('categories.index') }}" method="GET" class="form-inline mb-3">
        <input type="text" name="search" class="form-control mr-2" placeholder="Rechercher une catégorie" value="{{ request('search') }}">
        <button type="submit" class="btn btn-primary">Rechercher</button>
    </form>

    <a href="{{ route('categories.create') }}" class="btn btn-success mb-3">Créer une nouvelle catégorie</a>

    <div class="list-group">
        @foreach ($categories as $category)
            <a href="{{ route('categories.show', $category->id) }}" class="list-group-item list-group-item-action">
                {{ $category->name }}
                <span class="float-right">
                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-sm btn-warning">Modifier</a>
                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Supprimer</button>
                    </form>
                </span>
            </a>
        @endforeach
    </div>

    {{ $categories->links('pagination::bootstrap-4') }}
@endsection
