<x-layout>
    <div class="container-fluid bgRegister d-flex justify-content-center">
        <div class="row">
            <div class="col-12">
                <div class="card shadow-lg border-0 rounded-lg mt-5 formRegister">
                    <div class="card-header justify-content-center"><h3 class="fw-light my-4">Register</h3>
                    </div>
                    <div class="card-body">
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>    
                            </div>
                        @endif
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" name="name"class="form-control" id="username" placeholder="username" value="{{ old('name') }}">
                                <label for="floatingInputUsername">Username</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="email" name="email" class="form-control" id="email" placeholder="your@email">
                                <label for="floatingInputEmail">Email</label>
                            </div>
                        
                            <div class="form-floating mb-3">
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                            </div>

                            <div class="form-floating mb-3">
                            <input type="password" name="password_confirmation" class="form-control" id="floatingPasswordConfirm" placeholder="Confirm Password">
                            <label for="floatingPasswordConfirm">Confirm Password</label>
                            </div>
                            <a class="d-block text-center mt-2 small" href="{{ route('login') }}">Have an account? Sign In</a>

                            <div class="d-grid mb-2">
                                <button class='glowing-btn d-flex justify-content-center mt-5 mx-auto'><span class='glowing-txt'>Re<span class='faulty-letter'>gis</span>ter</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
