@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ __('registrar informacion personal') }}
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('person.store') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre: ') }}</label>

                                <div class="col-md-6">
                                    <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>

                                    @error('nombre')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="apellido" class="col-md-4 col-form-label text-md-right">{{ __('apellido') }}</label>

                                <div class="col-md-6">
                                    <input id="apellido" type="text" class="form-control @error('apellido') is-invalid @enderror" name="apellido">

                                    @error('apellido')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                                
                            <div class="form-group row">
                                <label for="cedula" class="col-md-4 col-form-label text-md-right">{{ __('cedula') }}</label>
                                
                                <div class="col-md-6">
                                    <input id="cedula" type="text" class="form-control @error('cedula') is-invalid @enderror" name="cedula">

                                    @error('cedula')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="urbanizacion" class="col-md-4 col-form-label text-md-right">{{ __('urbanizacion') }}</label>
                                
                                <div class="col-md-6">
                                    <input id="urbanizacion" type="text" class="form-control @error('urbanizacion') is-invalid @enderror" name="urbanizacion">

                                    @error('urbanizacion')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="manzana" class="col-md-4 col-form-label text-md-right">{{ __('manzana') }}</label>
                                
                                <div class="col-md-6">
                                    <input id="manzana" type="text" class="form-control @error('manzana') is-invalid @enderror" name="manzana">

                                    @error('manzana')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="casa" class="col-md-4 col-form-label text-md-right">{{ __('casa') }}</label>
                                
                                <div class="col-md-6">
                                    <input id="casa" type="text" class="form-control @error('casa') is-invalid @enderror" name="casa">

                                    @error('casa')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="fecha_nacimiento" class="col-md-4 col-form-label text-md-right">{{ __('fecha de nacimiento') }}</label>
                                
                                <div class="col-md-6">
                                    <input id="fecha_nacimiento" type="text" class="form-control @error('fecha_nacimiento') is-invalid @enderror" name="fecha_nacimiento">

                                    @error('fecha_nacimiento')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4 ">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('next') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
