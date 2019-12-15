@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ __('Editar informacion personal') }}
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('person.update', $person) }}">
                            @csrf
                            @method('put')    
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre: ') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name',$person->name)}}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Apellido: ') }}</label>

                                <div class="col-md-6">
                                    <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{old('lastname',$person->lastname)}}">

                                    @error('lastname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                                
                            <div class="form-group row">
                                <label for="dni" class="col-md-4 col-form-label text-md-right">{{ __('Cedula: ') }}</label>
                                
                                <div class="col-md-6">
                                    <input id="dni" type="text" class="form-control @error('dni') is-invalid @enderror" name="dni" value="{{old('dni',$person->dni)}}" disabled>

                                    @error('dni')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="urbanization" class="col-md-4 col-form-label text-md-right">{{ __('Urbanizacion: ') }}</label>
                                
                                <div class="col-md-6">
                                    <input id="urbanization" type="text" class="form-control @error('urbanization') is-invalid @enderror" name="urbanization" value="{{old('urbanization',$person->urbanization)}}">

                                    @error('urbanization')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="street" class="col-md-4 col-form-label text-md-right">{{ __('Manzana: ') }}</label>
                                
                                <div class="col-md-6">
                                    <input id="street" type="text" class="form-control @error('street') is-invalid @enderror" name="street" value="{{old('street',$person->street)}}">

                                    @error('street')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="house_number" class="col-md-4 col-form-label text-md-right">{{ __('Casa: ') }}</label>
                                
                                <div class="col-md-6">
                                    <input id="casa" type="text" class="form-control @error('house_number') is-invalid @enderror" name="house_number" value="{{old('house_number',$person->house_number)}}">

                                    @error('house_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="birthdate" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de nacimiento: ') }}</label>
                                
                                <div class="col-md-6">
                                    <input id="birthdate" type="date" class="form-control @error('birthdate') is-invalid @enderror" name="birthdate" value="{{$person->birthdate}}">

                                    @error('birthdate')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4 ">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('guardar') }}
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

