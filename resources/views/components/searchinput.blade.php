<div class="container py-4">
  <div class="row justify-content-center">
    <div class="col col-md-10 col-lg-6">
      <form action="{{ route('index')  }}/search" method="post" class="needs-validation">
        @csrf
        <div class="input-group input-search input-group-lg mb-3 shadow">
          <input type="text" class="form-control bg-grey border-primary" name="query" placeholder="Type superhero or villain name" value="{{ $search_query ?? '' }}" aria-label="Type name" aria-describedby="button-addon2" required>
          <div class="input-group-append">
            <button class="btn bg-grey" type="submit" id="button-addon2">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search text-white" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
              </svg></button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>