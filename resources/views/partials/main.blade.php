<div id="hero"></div>
<main>
  <div class="container">
    <h3>Current series</h3>
    <div class="row">
      @foreach ($comics as $card)
    @include('partials.card')
  @endforeach
    </div>
  </div>
  <div class="load d-flex justify-content-center align-items-center">
    <button>Load More</button>
  </div>
</main>