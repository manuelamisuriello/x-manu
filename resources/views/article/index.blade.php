<x-layout>
<div class="container-fluid">
    <div class="row">
        <h1>{{ __('ui.allArticles') }}</h1>
    </div>
</div>
<nav class="navbar2 navbar-expand-lg bg-body-white fw-bold">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item me-5">
          <a class="nav-link" aria-current="page" href="#">HTML</a>
        </li>
        <li class="nav-item me-5">
          <a class="nav-link" aria-current="page" href="#">CSS</a>
        </li>
        <li class="nav-item me-5">
          <a class="nav-link" href="#">JavaScript</a>
        </li>
        <li class="nav-item me-5">
          <a class="nav-link" href="#">PhP</a>
        </li>
        <li class="nav-item me-5">
          <a class="nav-link" href="#">Laravel</a>
        </li>
        <li class="nav-item me-5">
          <a class="nav-link" href="#">AI</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container my-4">
    <div class="row">
        @foreach($articles as $article)
        <div class="col-12 col-md-3 my-2">
            <div class="card">
                <img src="{{ Storage::url($article->image)  }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $article->title }}</h5>
              <h6 class="card-subtitle">{{ $article->subtitle }}</h6>
              <h6 class="card-subtitle"><a href="{{ route('article.byCategory', ['category' => $article->category->id]) }}">{{ $article->category->name }}</a></h6>
            </div>
            <div class="card-footer d-flex justify-content-between align-items-center">
              Redatto il : {{ $article->created_at->format('d/m/Y') }} da <a class="card-text" href="{{ route('article.byUser', ['user'=> $article->user->name]) }}">{{ $article->user->name }}</a>
              <a href="{{ route('article.show', compact('article')) }}" class="btn btn-primary">{{ __('ui.read') }}</a>
            </div>
          </div>
        </div>
        @endforeach
    </div>
</div>
</x-layout>