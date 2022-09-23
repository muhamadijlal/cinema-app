@extends('layouts.main.index')
{{-- @section('title','Dashboard page') --}}

@section('content')
<div class="col-lg-12">
  
  <div class="card-content">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item">
          <img src="https://image.tmdb.org/t/p/w500{{ $popular[0]->backdrop_path }}" class="d-block w-100" style="max-height: 500px;" alt="Image Architecture">
        </div>
        <div class="carousel-item">
          <img src="https://image.tmdb.org/t/p/w500{{ $popular[1]->backdrop_path }}" class="d-block w-100" style="max-height: 500px;" alt="Image Mountain">
        </div>
        <div class="carousel-item active">
          <img src="https://image.tmdb.org/t/p/w500{{ $popular[2]->backdrop_path }}" class="d-block w-100" style="max-height: 500px;" alt="Image Jump">
        </div>
      </div>      
    </div>    
  </div>

  <div class="row" style="margin:100px 0;">
    <div class="page-heading">
      <h3>Now Playing</h3>
    </div>      
    @foreach($nowPlaying as $item)
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="card">
        <div class="card-content">
          <a href="/themoviedb/detail/{{ $item->id }}"><img src="https://image.tmdb.org/t/p/w500{{ $item->backdrop_path }}" class="card-img-top img-fluid" alt="singleminded"></a>
          <div class="card-body">
            <a href="/themoviedb/detail/{{ $item->id }}"><h6 class="card-title">{{ $item->title }}</h6></a>
            <p class="text-warning" style="font-weight: bold;">{{ $item->popularity }}</p>
          </div>
        </div>
      </div>
    </div>
    @endforeach    
  </div>

  <div class="row" style="margin:100px 0;">
    <div class="page-heading">
      <h3>Popular</h3>
    </div>    
    @foreach ($popular as $item)
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="card">
        <div class="card-content">
          <a href="/themoviedb/detail/{{ $item->id }}"><img src="https://image.tmdb.org/t/p/w500{{ $item->backdrop_path }}" class="card-img-top img-fluid" alt="singleminded"></a>
          <div class="card-body">
            <a href="/themoviedb/detail/{{ $item->id }}"><h6 class="card-title">{{ $item->title }}</h6></a>
            <p class="text-warning" style="font-weight: bold;">{{ $item->popularity }}</p>
          </div>
        </div>
      </div>
    </div>                          
    @endforeach   
  </div>

  <div class="row" style="margin:100px 0;">
    <div class="page-heading">
      <h3>Top Rated</h3>
    </div>
    @foreach ($topRated as $item)
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="card">
        <div class="card-content">
          <a href="/themoviedb/detail/{{ $item->id }}"><img src="https://image.tmdb.org/t/p/w500{{ $item->backdrop_path }}" class="card-img-top img-fluid" alt="singleminded"></a>
          <div class="card-body">
            <a href="/themoviedb/detail/{{ $item->id }}"><h6 class="card-title">{{ $item->title }}</h6></a>
            <p class="text-warning" style="font-weight: bold;">{{ $item->popularity }}</p>
          </div>
        </div>
      </div>
    </div>                          
    @endforeach
  </div>
  
  <div class="row" style="margin:100px 0;">
    <div class="page-heading">
      <h3>Top Rated</h3>
    </div>
    @foreach ($upComing as $item)
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="card">
        <div class="card-content">
          <a href="/themoviedb/detail/{{ $item->id }}"><img src="https://image.tmdb.org/t/p/w500{{ $item->backdrop_path }}" class="card-img-top img-fluid" alt="singleminded"></a>
          <div class="card-body">
            <a href="/themoviedb/detail/{{ $item->id }}"><h6 class="card-title">{{ $item->title }}</h6></a>
            <p class="text-warning" style="font-weight: bold;">{{ $item->popularity }}</p>
          </div>
        </div>
      </div>
    </div>                          
    @endforeach    
  </div>
</div>
@endsection