@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Detalles de actividad') }}</div>

                <div class="card-body">
                        <div class=" row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Titulo: ') }}</label>
                
                            <div class="col-md-6">
                                <label  class=" col-form-label text-md-right">{{ $activity->title}}</label>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Descripcion: ') }}</label>

                            <div class="col-md-6">
                                <label class=" col-form-label text-md-right">{{ $activity->description}}</label>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a href="{{ route('activity.edit', $activity) }}" class="btn btn-primary">
                                    {{ __('Editar') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
