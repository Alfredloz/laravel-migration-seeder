@extends('layouts.app')
@section('title')
    Articles
@endsection
@section('content')
    <h1>Article</h1>
    @foreach ($articles as $article)
    <div class="card">
        <div class="card-header">
          {{ $article->id }}
        </div>
        <div class="card-body">
          <h5 class="card-title">{{$article->title}}</h5>
          <p class="card-text">{{ $article->body }}</p>
          <a href="#" class="btn btn-primary">Vai all'articolo</a>
        </div>
      </div>
    @endforeach
@endsection