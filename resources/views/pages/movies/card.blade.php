<div class="card col-3 m-4 p-0 py-2">
    <div class="card-body">
      <h5 class="card-title">{{ $movie->title }}</h5>
      <h6 class="card-subtitle mb-2 text-muted">{{ $movie->original_title }}</h6>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Release date: {{ $movie->date }}</li>
      <li class="list-group-item">Movie score: {{ $movie->vote }}</li>
      <li class="list-group-item">Nationality: {{ $movie->nationality }}</li>
    </ul>
  </div>