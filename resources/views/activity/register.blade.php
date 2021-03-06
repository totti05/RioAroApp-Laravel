@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @isset($activity)
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">
                {{__('actividad registrada')}}
            </div>
            <div class="card-body">
                <h4 class="card-title">{{$activity->title}}</h4>
                <p class="card-text">{{$activity->description}}</p>
            </div>
        </div>
        </div>
        @endisset

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registrar nueva actividad') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('activity.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Titulo: ') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Descripcion: ') }}</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description">

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Guardar') }}
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
