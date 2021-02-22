@extends('layouts.app')
@section('title')
    Contributors
@endsection
@section('content')
    <h2>Contributor</h2>
    @foreach ($contributors as $contributor)
    <div class="card w-75">
        <div class="card-body">
            <p></p>
          <h5 class="card-title">{{ $contributor->name }}</h5>
          <p class="card-text">{{ $contributor->last_name }}</p>
          <p class="card-text">{{ $contributor->country }}</p>
          <a href="#" class="btn btn-primary">Vai al profilo</a>
        </div>
      </div>
    @endforeach
@endsection