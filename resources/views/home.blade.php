@extends('layouts.panel')

@section('content')
<div class="container">    
        <!-- Header -->
    <div class="header bg-gradient-primary py-6 py-lg-7">
        <div class="container">
          <div class="header-body text-center mb-4">
            <div class="row justify-content-center">
              <div class="col-lg-5 col-md-6">
                <h1 class="text-white">Bienvenido {{Auth::user()->name}}</h1>
                <h2 class="text-lead text-light">Portal de acceso</h2>  
                <h3 class="text-lead text-light">Estas en el sistema de control de Clientes de Laser Systems</h3>                         
                </div>                  
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
