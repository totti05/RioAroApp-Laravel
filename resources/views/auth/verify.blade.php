@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Hola, verifica tu direccion de correo') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un nuevo enlace de verificacion ha sido enviado a tu correo.') }}
                            
                        </div>
                    @endif

                    {{ __('Antes de continuar, por favor revisa en tu correo el enlace de verificación.') }}
                    {{ __('si no has recibido el correo.') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click aquí para solicitar otro enlace') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
