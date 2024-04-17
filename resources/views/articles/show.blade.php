@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            {{ $article->title }}
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $article->subtitle }}</h5>
            <p class="card-text">{{ $article->content }}</p>
        </div>
    </div>
@endsection
