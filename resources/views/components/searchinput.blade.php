<div class="container py-4">
  <div class="row justify-content-center">
    <div class="col col-md-10 col-lg-6">
      <form action="{{ route('index')  }}/search" method="post" class="needs-validation">
        @csrf
        <div class="input-group input-group-lg mb-3 shadow bg-white rounded">
          <input type="text" class="form-control" name="query" placeholder="Type superhero or villain name" value="{{ $search_query ?? '' }}" aria-label="Type name" aria-describedby="button-addon2" required>
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>