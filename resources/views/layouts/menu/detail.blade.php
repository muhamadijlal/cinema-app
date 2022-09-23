@extends('layouts.main.index')

@section('content')
<div class="row mb-5">
  <div class="col-md-8 col-sm-12">
    <div class="card">        
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://image.tmdb.org/t/p/w500{{ $detail->backdrop_path }}"  style="max-height: 500px;" class="d-block w-100" alt="...">
          </div>          
        </div>        
      </div>
    </div>
  </div>
  <div class="col-md-4 col-sm-12">
    <div class="card" style="max-height: 500px; overflow: auto;">
      <div class="card-content">
        <div class="card-body">
          <h4 class="card-title mb-5">{{ $detail->title }}</h4>
          <p>Language : <span class="badge bg-primary">{{ $detail->original_language }}</span></p>
          <p class="card-text">{{ $detail->overview }}</p>
          <p>{{ $detail->release_date }}<span class="text-success"> ({{ $detail->status }})</span></p>
          <p class="text-warning">{{ $detail->popularity }}</p>
          @foreach ($detail->genres as $genre)
          <span class="badge bg-secondary">{{ $genre->name }}</span>
          @endforeach
        </div>        
      </div>
    </div>
  </div>
</div>
@endsection