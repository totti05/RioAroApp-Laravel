@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ __('Ver informacion personal') }}
                    </div>

                    <div class="card-body">
    
                            <div class="row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre: ') }}</label>

                                <div class="col-md-6">
                                    <label for="name" class="text-md-right">{{ $person->name }}</label>

                                </div>
                            </div>

                            <div class="row">
                                <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Apellido: ') }}</label>

                                <div class="col-md-6">
                                    <label for="name" class="text-md-right">{{ $person->lastname }}</label>

                                </div>
                            </div>
                                
                            <div class=" row">
                                <label for="dni" class="col-md-4 col-form-label text-md-right">{{ __('Cedula: ') }}</label>
                                
                                <div class="col-md-6">
                                    <label for="name" class="text-md-right">{{ $person->dni }}</label>

                                </div>
                            </div>

                            <div class="row">
                                <label for="urbanization" class="col-md-4 col-form-label text-md-right">{{ __('Urbanizacion: ') }}</label>
                                
                                <div class="col-md-6">
                                    <label for="name" class="text-md-right">{{ $person->urbanization }}</label>
                                    
                                </div>
                            </div>
                            
                            <div class=" row">
                                <label for="street" class="col-md-4 col-form-label text-md-right">{{ __('Manzana: ') }}</label>
                                
                                <div class="col-md-6">
                                    <label for="name" class="text-md-right">{{ $person->street }}</label>

                                    
                                </div>
                            </div>

                            <div class=" row">
                                <label for="house_number" class="col-md-4 col-form-label text-md-right">{{ __('Casa: ') }}</label>
                                
                                <div class="col-md-6">
                                    <label for="name" class="text-md-right">{{ $person->house_number }}</label>

                                </div>
                            </div>

                            <div class=" row">
                                <label for="birthdate" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de nacimiento: ') }}</label>
                                
                                <div class="col-md-6">
                                    <label for="name" class="text-md-right">{{ $person->birthdate }}</label>

                                </div>
                            </div>

                            <div class=" row mb-0">
                                <div class="col-md-8 offset-md-4 ">
                                    <a href="{{ route('person.edit', $person) }}" class="btn btn-primary">
                                        {{ __('editar') }}
                                    </a>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

