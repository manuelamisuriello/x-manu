<x-layout>
    <div class="container-fluid mb-3 bgHeader">
      <div class="row h-75 align-content-end">
        <div class="col-12 d-flex-direction-column mx-3">
          @if(session('message'))
          <div class="alert alert-success text center">
            {{ session('message') }}
          </div>
          @endif
          <h1>X-manu</h1>
          <span class="motto mb-5">{{ __('ui.x-manu') }}<br>{{ __('ui.play') }}</span>
          <button class='glowing-btn d-flex justify-content-center mt-5 mx-auto'><span class='glowing-txt'>Ab<span class='faulty-letter'>o</span>ut</span></button>
        </div>
      </div>
    </div>
    
    <div class="container my-4">
      <div class="row justify-content-around">
        @foreach($articles as $article)
        <div class="col-12 col-md 3">
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