@extends('layouts.app')

@section('template_title')
    {{ $libro->name ?? __('Show') . " " . __('Libro') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Libro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('libros.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">

                        <div class="form-group mb-2 mb20">
                            <strong>Name:</strong>
                            {{ $libro->name }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Año:</strong>
                            {{ $libro->año }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Escritor:</strong>
                            {{ $libro->escritor }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
