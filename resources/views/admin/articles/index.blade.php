@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center align-items-center mb-2">
        <a href="{{ url('/admin/articles/create') }}" class="btn btn-primary mb-3">Ajouter un article</a>
    </div>

    <div class="list-group">
        @if (count($articles) === 0)
            <div class="alert alert-warning text-center">Aucun article pour le moment.</div>
        @else
            @foreach ($articles as $article)
                <div class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    {{ $article->title }}
                    <div>
                        <form action="{{ url('/admin/articles', $article->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Supprimer</button>
                        </form>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection
