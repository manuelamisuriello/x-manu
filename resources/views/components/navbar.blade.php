<nav class="navbar navbar-expand-lg bg-body-white fw-bold sticky-top">
    <div class="container-fluid d-flex align-items-center">
      <a class="navbar-brand" href="{{ route('homepage') }}"><img class="logo" src="/media/x-manu.logo.png" alt="logo x-manu"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ route('homepage') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contacts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('article.index') }}">X-blog</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto mt-2">
          <li class="nav-item">
              <x-_locale lang="it" nation="it" />
          </li>
          <li class="nav-item">
              <x-_locale lang="en" nation="gb" />
          </li>
       </ul>
        @auth
        <li class="nav-item dropdown mt-2 ms-4">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-user"></i>
            {{ __('ui.hi') }} {{ Auth::user()->name }}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Profilo</a></li>
            <li><a class="dropdown-item" href="{{ route('article.create') }}">{{ __('ui.insert') }}</a></li>
            <li><hr class="dropdown-divider"></li>
            <li class="nav-item">
              <a class="nav-link" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
            </li>
            <form method="POST" id="form-logout" action="{{ route('logout') }}" class="d-none">
              @csrf
            </form>
          </ul>
        </li>
        @endauth
        @guest
        <ul class="auth-link mt-4">
          <li class="nav-item d-flex-inline">
          <a class="nav-link me-3" href="#"><i class="fa-solid fa-user"></i></a>
          </li>
          <li class="nav-item me-3">
            <a class="nav-link text-center" href="{{ route('login') }}">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-auto" href="{{ route('register') }}">Register</a>
          </li>
        </ul>
        @endguest
      </div>
    </div>
  </nav>