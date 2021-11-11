@extends('layouts.app')

@section('content')
<main class="main-content  mt-0">
  <div class="page-header align-items-start min-vh-100" style="background-image: url('https://cdna.artstation.com/p/assets/images/images/008/511/940/large/kaitlynn-fox-rose-room.jpg?1513231499');">
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container my-auto">
      <div class="row">
        <div class="col-lg-4 col-md-8 col-12 mx-auto">
          <div class="card z-index-0 fadeIn3 fadeInBottom">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Iniciar sesión</h4>
              </div>
              <div class="card-body">
                <form role="form" class="text-start" method="POST" action="{{ route('login') }}">
                  @csrf
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">{{ __('Correo electrónico') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">{{ __('Contraseña') }}</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <div class="form-check form-switch d-flex align-items-center mb-3">
                    <input class="form-check-input" type="checkbox" id="rememberMe">
                    <label class="form-check-label mb-0 ms-2" for="rememberMe"> {{ __('Recuerdame') }}</label>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Entrar</button>
                  </div>

                  <p class="mt-4 text-sm text-center">
                    @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                      {{ __('¿Olvidaste tu contraseña?') }}
                    </a>
                    @endif
                    <a href="{{{('register')}}}" class="text-primary text-gradient font-weight-bold">Registrate</a>
                  </p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</main>
@endsection