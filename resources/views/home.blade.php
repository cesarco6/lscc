@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bienvenido') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Estas en el sistema de control de Clientes') }}
                    <a href="{{ route('admin.prospects.dashboard')}}" class="btn btn-primary">
                        Adelante
                    </a>         
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
