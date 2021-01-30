@extends('layouts.app')

@section('content')

<div class="container mt-md-5 mt-5">
  <div class="row justify-content-center">
    <div class="col col-lg-10">
      <h1 class="h1 text-left text-md-center">Search all superheroes and villains data from all universes.</h1>
    </div>
  </div>
</div>

{{-- SEARCH INPUT --}}
@include('components/searchinput')

{{-- RESULTS CARDS --}}
@if ($superheroes)
  <div class="container">
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
        @foreach ($superheroes as $superhero)
          <div class="col">
            <div class="card mb-3 border-0">


              <div class="card-img filter">
                <img src="{{ $superhero['image']['url'] }}" class="card-img" alt="{{ $superhero['name'] }}">
              </div>

              <div class="card-body p-3">
                <h4 class="card-title mb-0">{{ $superhero['name'] }}</h4>
                <p class="card-text mb-0"><small>{{ $superhero['appearance']['gender'] }} - {{ $superhero['appearance']['race'] }}</small></p>
                @if ($superhero['powerstats']['power'] !== "null")
                  <p class="text-left mb-0"><small>Power: {{ $superhero['powerstats']['power'] }}/100</small></p>
                  <div class="progress">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: {{ $superhero['powerstats']['power'] }}%" aria-valuenow="{{ $superhero['powerstats']['power'] }}" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                @endif
                @if ($superhero['biography']['publisher'] !== 'null')
                  <span class="badge badge-outline badge-primary mt-3"> {{ str_limit($superhero['biography']['publisher'], $limit = 15, $end = '...') }}</span>
                @endif
                <p><a href="/details/{{ $superhero['id'] }}" class="stretched-link"></a></p>
              </div>

            </div>
          </div>
        @endforeach
      </div>
  </div>

@else

  <div class="container">
    <div class="row justify-content-center">

    {{-- NO RESULTS FOUND --}}
    @if ($error_type == 'no results')
      <div class="col-12 text-center">
        <div class="alert pt-2 text-white border-0" role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-shield-slash-fill" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M1.093 3.093c-.465 4.275.885 7.46 2.513 9.589a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.32 11.32 0 0 0 1.733-1.525L1.093 3.093zm12.215 8.215L3.128 1.128A61.369 61.369 0 0 1 5.073.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.483 3.626-.332 6.491-1.551 8.616zm.338 3.046l-13-13 .708-.708 13 13-.707.707z"/>
        </svg>
          <h3 class="text-center mt-5">No superhero or villain found! <a href="{{ route('index')  }}?search=Spider" class="alert-link">Try "Spider"</a></h3>
        </div>
      </div>
    @endif

    {{-- API ERROR--}}
    @if ($error_type == 'API ERROR')
      <div class="col-12 col-md-10 col-lg-6">
        <div class="alert alert-danger shadow" role="alert">
          API ERROR: {{ $api_error }}
        </div>
      </div>
    @endif

    </div>
  </div>

@endif


@endsection