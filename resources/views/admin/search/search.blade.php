@extends('layouts.panel')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1>Busqueda de Prospectos</h1>
            <div class="card mt-3">
                <div class="card-body">
                    <form action="{{ route('admin.prospects.regmat') }}" method="get">
                        @csrf
                        <div class="form-row align-items-center">
                        <div class="col-auto">
                            <label for="name" class="sr-only">Nombre:</label>
                            <input type="text" class="form-control" name="name" placeholder="Nombre">                        
                        </div>
                        <div class="col-auto">
                            <label for="phone" class="sr-only">Telefono:</label>
                            <input type="text" class="form-control" name="phone" placeholder="Telefono">                        
                        </div>
                        <div class="col-auto">
                            <label for="movil" class="sr-only">Celular:</label>
                            <input type="text" class="form-control" name="movil" placeholder="Celular">                        
                        </div>
                        <div class="col-auto">
                            <label for="email" class="sr-only">Correo:</label>
                            <input type="text" class="form-control" name="email" placeholder="email">                        
                        </div>
                        <div class="col-auto">                            
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="table-responsive">
            <table class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Telefono</th>
                        <th>Celular</th>
                        <th>email</th>
                        <th>Ciudad</th>
                        <th>Producto</th>
                        <th style="max-width: 50px">Observaciones</th>
                        <th>Fecha</th>
                        <th>Vendedor</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($prospects as $prospect)
                        <tr>
                            <td style="font-size: 0.85rem">{{$prospect->name}}</td>
                            <td>{{$prospect->phone}}</td>
                            <td>{{$prospect->movil}}</td>
                            <td style="font-size: 0.75rem">{{$prospect->email}}</td>
                            <td>{{$prospect->city}}</td>
                            <td>{{$prospect->typeofprod}}</td>
                            <td class="col-md-3" style="font-size: 0.65rem">{{$prospect->review}}</td>
                            <td style="font-size: 0.65rem">{{$prospect->regis_at}}</td>
                            <td style="font-size: 0.85rem">{{$users[$prospect->seller->id]->name}}</td>
                        </tr>
                    @endforeach
                </tbody> 
            </table>
            {{$prospects->links()}}
            </div>
        </div>
    </div>
</div>


@endsection()