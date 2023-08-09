<x-layout>
<div class="container-fluid">
    <div class="row justify-content-center">
        <h1>Inserisci un articolo</h1>
    </div>
</div>
<div class="container my5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form class="card p-5 shadow" action="{{ route('article.store') }}" method="POST"enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">{{ __('ui.title') }}</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                </div>

                <div class="mb-3">
                    <label for="subtitle" class="form-label">{{ __('ui.subtitle') }}</label>
                    <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{ old('subtitle') }}">
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">{{ __('ui.image') }}</label>
                    <input type="file" class="form-control" id="image" name="image" value="{{ old('subtitle') }}">
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">{{ __('ui.category') }}</label>
                    <select name="category" id="category" class="form-control">
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="body" class="form-label">{{ __('ui.body') }}</label>
                    <textarea name="body" class="form-control" id="body" cols="30" rows="7" name="body" value="{{ old('body') }}"></textarea>
                </div>
                <button> {{ __('ui.send') }}</button>
                <a class="btn btn-info"href="{{ route('homepage') }}">{{ __('ui.back') }}</a>
            </form>
        </div>
    </div>
</div>
</x-layout>