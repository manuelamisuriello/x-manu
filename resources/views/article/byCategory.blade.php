<x-layout>
    <div class="container-fluid">
        <div class="row">
            <h1>{{ __('ui.category') }} : {{ $category->name }}</h1>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            @foreach($category->articles as $article)
            <div class="col-12 col-md-3">
                <div class="card">
                    <img src="{{ Storage::url($article->image) }}" alt="{{ $article->title }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->title }}</h5>
                        <p>{{ $article->subtitle }}</p>
                        <h6 class="card-subtitle"><a href="{{ route('article.byCategory', ['category' => $article->category->id]) }}">{{ $article->category->name }}</a></h6>
                    </div>
                    <div class="card-footer d-flex justify-content-between align-items-center">
                        Redatto il : {{ $article->created_at->format('d/m/Y') }} da <a class="card-text"  href="{{ route('article.byUser', ['user'=> $article->user->name]) }}">{{ $article->user->name }}</a>
                         <a href="{{ route('article.show', compact('article')) }}" class="btn btn-primary">{{ __('ui.read') }}</a>
                      </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>