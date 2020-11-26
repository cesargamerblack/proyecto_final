@extends('layouts.admin')
@section('contenido')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Escritorio') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
            
                    <div class="card-body">
                        <h4>Bienvenido (a) . {{ auth()->user()->name }} </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection