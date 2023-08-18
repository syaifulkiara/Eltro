@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center"><h2><b><i class="fab fa-envira"></i> DOKUMENTASI PROJECT</b></h2>
    </div>
    <div class="mb-2">  
        <button type="button" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>
        Input Data</button>
    </div>
   <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col mb-4">
    <div class="card">
      <img src="{{asset('images/gallery/11.jpg')}}" class="img-responsive" alt="...">
    </div>
  </div>
  <div class="col mb-2">
    <div class="card">
      <img src="{{asset('images/gallery/22.jpg')}}" class="img-responsive" alt="...">
    </div>
  </div>
  <div class="col mb-2">
    <div class="card">
      <img src="{{asset('images/gallery/33.jpg')}}" class="img-responsive" alt="...">
    </div>
  </div>
  <div class="col mb-2">
    <div class="card">
      <img src="{{asset('images/gallery/44.jpg')}}" class="img-responsive" alt="...">
    </div>
  </div>
</div>
</div>
@endsection