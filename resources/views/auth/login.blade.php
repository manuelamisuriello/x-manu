<x-layout>
    <div class="container-fluid bgLogin d-flex justify-content-center">
      @if($errors->any())
      <div class="row">
        <div class="col-12">
          <div class="alert alert-danger">
            <ul class="mb-0">
              @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>    
          </div>
        </div>
      </div>
      @endif
      <div class="row">
        <div class="col-12 col md-6">
          <form method="POST" action="{{ route('login') }}" class="formLogin mx-auto">
            @csrf
            <div class="card-header justify-content-center"><h3 class="fw-light my-4">Login</h3>
            </div>
            <div class="form-floating mb-3">
              <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
              <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating mb-3">
              <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
              <label for="floatingPassword">Password</label>
            </div>
            <div class="text-center">
              <a class="small" href="#">Forgot password?</a>
            </div>
            
            <div class="d-grid">
              <button class='glowing-btn d-flex justify-content-center mt-5 mx-auto'><span class='glowing-txt'>Si<span class='faulty-letter'>gn</span> in</span></button>
            </div>
          </form>  
        </div>
      </div>
    </div>
  </x-layout>    