@extends('layouts.panel')
  
@section('content')
<div class="container">
    <div class="row">
        <div class="offset-md-2 col-md-8">
            <div class="card mt-3">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col">
                        <h3 class="mb-0">Muestra el Prospecto</h3>
                        </div>
                        <div class="col text-right">          
                            <a class="btn btn-primary" href="{{ url('/prospects/prostabl') }}"> Atras</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Nombre:</h5>
                        <p class="card-text">{{$prospect->name}}</p>
                        <h5 class="card-title">Telefono:</h5>
                        <p class="card-text">{{$prospect->phone}}</p>
                        <h5 class="card-title">Movil</h5>
                        <p class="card-text">{{$prospect->movil}}</p>
                        <h5 class="card-title">Producto:</h5>
                        <p class="card-text">{{$prospect->typeofprod}}</p>
                        <h5 class="card-title">Status:</h5>
                        <p class="card-text">{{$prospect->status}}</p>
                        <h5 class="card-title">Direccion:</h5>
                        <p class="card-text">{{$prospect->address}}</p>
                        <h5 class="card-title">Código postal:</h5>
                        <p class="card-text">{{$prospect->cp}}</p>
                        <h5 class="card-title">Observaciones:</h5>
                        <p class="card-text">{{$prospect->review}}</p>
                        <h5 class="card-title">Registro:</h5>
                        <p class="card-text">{{$prospect->regis_at}}</p>                                
                      </div>
                </div>
            </div>
        </div>
    </div>   
</div>
   
        
  
   
  
@endsection