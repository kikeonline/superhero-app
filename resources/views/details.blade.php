@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">

      <div class="col-12 p-0 col-md-5">
        <img src="{{ $details['image']['url'] }}" class="img-fluid img-details rounded w-100" alt="Name">
      </div>

        <div class="col-12 col-md-7">
          <div class="card card-details mb-3  border-0 text-center">
            <div class="card-body p-3">
              <h2 class="card-title mb-0 mt-xl-5">{{ $details['name'] }}</h2>
              <span class="badge badge-outline badge-primary">{{ $details['biography']['publisher'] }}</span>

              <h4 class="text-left mb-0 mt-3">PowerStats</h4>
              <div class="row">
                <div class="col-6">
                  <p class="text-left mb-1 mt-3"><small>Intelligence: {{ $details['powerstats']['intelligence'] }}%</small></p>
                  <div class="progress">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: {{ $details['powerstats']['intelligence'] }}%" aria-valuenow="{{ $details['powerstats']['intelligence'] }}" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <div class="col-6">
                  <p class="text-left mb-1 mt-3"><small>Strength: {{ $details['powerstats']['strength'] }}%</small></p>
                  <div class="progress">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: {{ $details['powerstats']['strength'] }}%" aria-valuenow="{{ $details['powerstats']['strength'] }}" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <div class="col-6">
                  <p class="text-left mb-1 mt-3"><small>Speed: {{ $details['powerstats']['speed'] }}%</small></p>
                  <div class="progress">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: {{ $details['powerstats']['speed'] }}%" aria-valuenow="{{ $details['powerstats']['speed'] }}" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <div class="col-6">
                  <p class="text-left mb-1 mt-3"><small>Durability: {{ $details['powerstats']['durability'] }}%</small></p>
                  <div class="progress">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: {{ $details['powerstats']['durability'] }}%" aria-valuenow="{{ $details['powerstats']['durability'] }}" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <div class="col-6">
                  <p class="text-left mb-1 mt-3"><small>Power: {{ $details['powerstats']['power'] }}%</small></p>
                  <div class="progress">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: {{ $details['powerstats']['power'] }}%" aria-valuenow="{{ $details['powerstats']['power'] }}" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>

              <h4 class="text-left mt-5">Biography</h4>
              <dl class="row text-left text-white">
                <dt class="col-sm-6">Full Name</dt>
                <dd class="col-sm-6">
                  <p>{{ $details['biography']['full-name'] }}</p>
                </dd>
              
                <dt class="col-sm-6">Alter egos</dt>
                <dd class="col-sm-6">
                  <p>{{ $details['biography']['alter-egos'] }}</p>
                </dd>
              
                <dt class="col-sm-6">Place of birth</dt>
                <dd class="col-sm-6">
                  <p>{{ $details['biography']['place-of-birth'] }}</p>
                </dd>
              
                <dt class="col-sm-6 text-truncate">First appearance</dt>
                <dd class="col-sm-6">
                  <p>{{ $details['biography']['first-appearance'] }}</p>
                </dd>
              
                <dt class="col-sm-6">Alignment</dt>
                <dd class="col-sm-6">
                  <p>{{ $details['biography']['alignment'] }}</p>
                </dd>
              </dl>
            </div>
          </div>
        </div>
    </div>
</div>

@include('components/searchinput')

@endsection