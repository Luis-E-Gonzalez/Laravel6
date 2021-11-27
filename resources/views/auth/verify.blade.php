@extends('layouts.app')
@section('content')
<main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image: url('https://cdna.artstation.com/p/assets/images/images/008/511/940/large/kaitlynn-fox-rose-room.jpg?1513231499');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container container my-auto">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card z-index-0 fadeIn3 fadeInBottom">

                    <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                    <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Verifica tu correo electrónico</h4>
                    </div>

                        <div class="card-body">
                            @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('Un nuevo enlace de verificación ha sido enviado tu correo electrónico.') }}
                            </div>
                            @endif

                            {{ __('Antes de continuar, por favor verifica tu correo electrónico con el enlace recibido.') }}
                            {{ __('Si no recibiste el enlace por favor') }},

                            <form role="form" class="text-start" action="{{ route('verification.resend') }}">
                                @csrf
                                <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Haz click aquí para solicitar otro') }}</button>.
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection