@extends('layouts.app')
@section('title')
    Projects
@endsection
@section('content')
    @foreach ($projects as $project)
    <div class="card" style="width: 18rem; margin: 2rem;">
        <img class="card-img-top" src="{{ $project->logo }}" alt="Card image cap" style="width: 200px;">
        <div class="card-body">
          <h5 class="card-title">{{ $project->name }}</h5>
          <p class="card-text">Something aboout project</p>
          <a href="{{ $project->link }}" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    @endforeach
@endsection