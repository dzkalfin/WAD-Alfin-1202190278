@extends('main')
@section('container')

<p class="text-center my-5 fw-bold fs-4">List vaccine</p>

{{-- Cards --}}
<div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-100">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{ $vaccine->name }}</h5>
          <p class="card-text"><small class="text-muted">{{ $vaccine->price }}r</small></p>
          <p class="card-text">{{ $vaccine->description }}</p>
        </div>
        <div class="card-footer">
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary" type="button">Vaccine Now</button>
            </div>
        </div>
      </div>
    </div>
  </div>

@endsection