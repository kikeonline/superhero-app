@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">

      <div class="col">
        <div class="card mb-3 shadow">
          <div class="card-img">
            <img src="https://www.superherodb.com/pictures2/portraits/10/100/667.jpg" class="card-img" alt="Name">
          </div>
          <div class="card-body p-3">
            <h5 class="card-title mb-0">Name</h5>
            <p class="card-text mb-0"><small class="text-muted">Male</small></p>
            <p class="card-text mb-0">Superman/Batman #8 (May, 2004)</p>
          </div>
        </div>
      </div>

    </div>
</div>

<div class="container py-4">
  <div class="row justify-content-center">
    <div class="col col-md-10 col-lg-6">
      <div class="input-group input-group-lg mb-3 shadow bg-white rounded">
        <input type="text" class="form-control" placeholder="Type name" aria-label="Type name" aria-describedby="button-addon2">
        <div class="input-group-append">
          <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row justify-content-center">

    <div class="col-12 col-md-10 col-lg-6">
      <div class="alert alert-danger shadow" role="alert">
        The API returned the following error:
        <br>
        Error..
      </div>
    </div>

  </div>
</div>


@endsection