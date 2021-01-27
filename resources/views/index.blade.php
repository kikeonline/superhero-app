@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col">
      <h2>Search all superheroes and villians data from all universes.</h2>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col">
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Type name" aria-label="Type name" aria-describedby="button-addon2">
        <div class="input-group-append">
          <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">

  <div class="card-deck">

    <div class="card">
      <img src="https://www.superherodb.com/pictures2/portraits/10/100/667.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Name</h5>
        <p class="card-text"><small class="text-muted">Gender</small></p>
        <p class="card-text">Bio.</p>
      </div>
    </div>

  </div>

  </div>
</div>

@endsection