@extends('layouts.app')
@section('title')
    Sponsors
@endsection
@section('content')
    @foreach ($sponsors as $sponsor)
    <div class="card text-center">
        <div class="card-header">

        </div>
        <div class="card-body">
          <h5 class="card-title">{{ $sponsor->company }}</h5>
          <p class="card-text">CEO: {{ $sponsor->ceo }}</p>
          <a href="#" class="btn btn-primary">Vai al sito</a>
        </div>
        <div class="card-footer text-muted">
          <p class="card-text">e-mail: {{ $sponsor->email }}</p>
        </div>
      </div>
      
    @endforeach
@endsection