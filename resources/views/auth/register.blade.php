@extends('layouts.app')

@section('content')
     <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
                   <img src="{{ asset('landing/assets/images/Logo-Fathforce-White-New-Persegi-Transparant.png')}}" width="300" height="300" alt="Fathforce">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Register</h4></div>

              <div class="card-body">
                <form method="POST"  action="{{ route('register') }}">
					@csrf
                  <div class="row">
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autofocus>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  required autocomplete="email">
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Password</label>
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" data-indicator="pwindicator" name="password" required autocomplete="new-password">
                    </div>

                    <div class="form-group col-6">
                      <label for="password2" class="d-block">Password Confirmation</label>
                      <input id="password2" type="password" class="form-control" name="password-confirm"  required autocomplete="new-password">
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                       {{ __('Register') }}
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="simple-footer mb-5 mt-3 text-center">
              Copyright &copy; Muhamad Randy Andrian
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection