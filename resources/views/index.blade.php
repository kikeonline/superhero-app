@extends('layouts.app')

@section('content')

<div class="container mt-md-5 mt-5">
  <div class="row justify-content-center">
    <div class="col col-lg-10">
      <h1 class="h1 text-left text-md-center">Search all superheroes and villains data from all universes.</h1>
    </div>
  </div>
</div>

<div class="container py-4">
  <div class="row justify-content-center">
    <div class="col col-md-10 col-lg-6">
      <form action="{{ route('index')  }}" method="get" class="needs-validation">
        <div class="input-group input-group-lg mb-3 shadow bg-white rounded">
          <input type="text" class="form-control" name="s" placeholder="Type name" aria-label="Type name" aria-describedby="button-addon2" required>
          <div class="invalid-feedback">
            Please provide a valid city.
          </div>
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="container d-none">
  <div class="row justify-content-center">

    <div class="col-12 col-md-10 col-lg-6">
      <div class="alert alert-danger shadow" role="alert">
        The API returned the following error:
        <br>
        Error..
      </div>
    </div>

    <div class="col-12 text-center">
      <div class="alert alert-light pt-5 bg-transparent" role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg>
        <h4 class="text-center mt-5">No superhero or villain found!</h4>
      </div>
    </div>

  </div>
</div>


@if ($superheroes)
  <div class="container">
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
        @foreach ($superheroes as $superhero)
          <div class="col">
            <div class="card mb-3 shadow border-0">
              <div class="card-img">
                <img src="{{ $superhero['image']['url'] }}" class="card-img" alt="Name">
              </div>
              <div class="card-body p-3">
                <h5 class="card-title mb-0">{{ $superhero['name'] }}</h5>
                <p class="card-text mb-0"><small class="text-muted">{{ $superhero['appearance']['gender'] }} - {{ $superhero['appearance']['race'] }}</small></p>
                <p class="card-text mb-0">Superman/Batman #8 (May, 2004)</p>
                <p class="mt-3"><a href="/details" class="stretched-link text-decoration-none">View details</a></p>
              </div>
            </div>
          </div>
        @endforeach
      </div>
  </div>
@else
    I don't have any records!
@endif


@endsection