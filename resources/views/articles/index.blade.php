@extends('layouts.app')

@section('content')
    <div class="row">
        @foreach ($articles as $article)
            <div class="col-md-6 col-lg-3">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->title }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $article->subtitle }}</h6>
                        <a href="{{ url('/articles', $article->id) }}" class="card-link">Voir détails</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center">
        {!! $articles->links() !!}
    </div>  
@endsection
