@extends('layouts.main.index')

@section('content')
<div class="page-heading">
  <h1>Top Rated</h1>
</div>
<div class="row" style="margin-bottom:100px;">
  <div class="col-lg-3 col-md-4 col-sm-6">
    <div class="card">
      <div class="card-content">
        <a href="/detail"><img src="assets/images/samples/motorcycle.jpg" class="card-img-top img-fluid" alt="singleminded"></a>
        <div class="card-body">
          <a href="/detail"><h5 class="card-title">Title</h5></a>
          <h6>Category</h6>
          <p>9.5</p>
        </div>
      </div>
    </div>
  </div> 
  <div class="col-lg-3 col-md-4 col-sm-6">
    <div class="card">
      <div class="card-content">
        <a href="/detail"><img src="assets/images/samples/motorcycle.jpg" class="card-img-top img-fluid" alt="singleminded"></a>
        <div class="card-body">
          <a href="/detail"><h5 class="card-title">Title</h5></a>
          <h6>Category</h6>
          <p>9.5</p>
        </div>
      </div>
    </div>
  </div> 
  <div class="col-lg-3 col-md-4 col-sm-6">
    <div class="card">
      <div class="card-content">
        <a href="/detail"><img src="assets/images/samples/motorcycle.jpg" class="card-img-top img-fluid" alt="singleminded"></a>
        <div class="card-body">
          <a href="/detail"><h5 class="card-title">Title</h5></a>
          <h6>Category</h6>
          <p>9.5</p>
        </div>
      </div>
    </div>
  </div> 
  <div class="col-lg-3 col-md-4 col-sm-6">
    <div class="card">
      <div class="card-content">
        <a href="/detail"><img src="assets/images/samples/motorcycle.jpg" class="card-img-top img-fluid" alt="singleminded"></a>
        <div class="card-body">
          <a href="/detail"><h5 class="card-title">Title</h5></a>
          <h6>Category</h6>
          <p>9.5</p>
        </div>
      </div>
    </div>
  </div> 
  <div class="col-lg-3 col-md-4 col-sm-6">
    <div class="card">
      <div class="card-content">
        <a href="/detail"><img src="assets/images/samples/motorcycle.jpg" class="card-img-top img-fluid" alt="singleminded"></a>
        <div class="card-body">
          <a href="/detail"><h5 class="card-title">Title</h5></a>
          <h6>Category</h6>
          <p>9.5</p>
        </div>
      </div>
    </div>
  </div> 
  <div class="col-lg-3 col-md-4 col-sm-6">
    <div class="card">
      <div class="card-content">
        <a href="/detail"><img src="assets/images/samples/motorcycle.jpg" class="card-img-top img-fluid" alt="singleminded"></a>
        <div class="card-body">
          <a href="/detail"><h5 class="card-title">Title</h5></a>
          <h6>Category</h6>
          <p>9.5</p>
        </div>
      </div>
    </div>
  </div> 
  <div class="col-lg-3 col-md-4 col-sm-6">
    <div class="card">
      <div class="card-content">
        <a href="/detail"><img src="assets/images/samples/motorcycle.jpg" class="card-img-top img-fluid" alt="singleminded"></a>
        <div class="card-body">
          <a href="/detail"><h5 class="card-title">Title</h5></a>
          <h6>Category</h6>
          <p>9.5</p>
        </div>
      </div>
    </div>
  </div> 
  <div class="col-lg-3 col-md-4 col-sm-6">
    <div class="card">
      <div class="card-content">
        <a href="/detail"><img src="assets/images/samples/motorcycle.jpg" class="card-img-top img-fluid" alt="singleminded"></a>
        <div class="card-body">
          <a href="/detail"><h5 class="card-title">Title</h5></a>
          <h6>Category</h6>
          <p>9.5</p>
        </div>
      </div>
    </div>
  </div> 
</div>
{{-- Paginate --}}
<nav aria-label="Page navigation example" class="mb-5">
  <ul class="pagination pagination-primary justify-content-end">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
    </li>
    <li class="page-item active">
      <a class="page-link" href="#">1</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">3</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
@endsection