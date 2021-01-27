@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Type a superhero or villain name" aria-label="Type a superhero or villain name" aria-describedby="button-addon2">
            <button class="btn btn-outline-dark" type="button" id="button-addon2">Search</button>
        </div>
        </div>
    </div>
</div>
@endsection
