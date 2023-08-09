<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <h1>{{ $article->title }}</h1>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-12 col-md-8">
                <img src="{{ Storage::url($article->image) }}" class="img-fluid" alt="{{ $article->title }}">
                <div class="text-center">
                    <h2>{{ $article->subtitle }}</h2>
                    <div class="my-3">
                        <p>Redatto da: {{ $article->user->name }} il: {{ $article->created_at->format('d/m/Y') }}</p>
                    </div>
                </div>
                <hr>
                <p>{{ $article->body }}</p>
                <div class="text-center">
                    <a href="{{ route('article.index') }}" class="btn btn-info text-white my-5">{{ __('ui.back') }}</a>
                </div>
            </div>
        </div>    
    </div>   
</x-layout>
