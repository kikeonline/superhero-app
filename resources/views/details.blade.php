@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row">
        <img src="https://www.superherodb.com/pictures2/portraits/10/100/667.jpg" class="img-fluid img-details" alt="Name">
        <div class="col-12">
          <div class="card card-details mb-3 shadow border-0 text-center">
            <div class="card-body p-3">
              <h5 class="card-title mb-0">Name</h5>
              <p class="card-text mb-0"><small class="text-muted">Male - Cyborg</small></p>

              <div class="row">
                <div class="col-6">
                  <p class="text-left mb-1 mt-3"><small>Intelligence: 75%</small></p>
                  <div class="progress">
                    <div class="progress-bar bg-dark" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <div class="col-6">
                  <p class="text-left mb-1 mt-3"><small>strength: 92%</small></p>
                  <div class="progress">
                    <div class="progress-bar bg-dark" role="progressbar" style="width: 92%" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <div class="col-6">
                  <p class="text-left mb-1 mt-3"><small>speed: 90%</small></p>
                  <div class="progress">
                    <div class="progress-bar bg-dark" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <div class="col-6">
                  <p class="text-left mb-1 mt-3"><small>durability: 100%</small></p>
                  <div class="progress">
                    <div class="progress-bar bg-dark" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <div class="col-6">
                  <p class="text-left mb-1 mt-3"><small>power: 40%</small></p>
                  <div class="progress">
                    <div class="progress-bar bg-dark" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>

              <p class="card-text text-left mt-4">Superman/Batman #8 (May, 2004)</p>
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