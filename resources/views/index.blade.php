<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
  <!-- Image and text -->
  <nav class="navbar navbar-dark bg-dark py-3 mb-5">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bullseye d-inline-block align-top mr-2" viewBox="0 0 16 16">
          <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
          <path d="M8 13A5 5 0 1 1 8 3a5 5 0 0 1 0 10zm0 1A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/>
          <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8z"/>
          <path d="M9.5 8a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
        </svg>
        {{ config('app.name', 'Laravel') }}
      </a>
    </div>
  </nav>


  <div class="container">
    <div class="row">
      <div class="col">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Type a superhero or villain name" aria-label="Type a superhero or villain name" aria-describedby="button-addon2">
          <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
        </div>
      </div>
    </div>
  </div>

</body>
</html>