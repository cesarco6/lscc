@extends('layouts.app1')

@section('content')
    <div class="container">        
        <div class="card mt-3">
            <div class="card-body">
                <div class="d-flex">
                    <h1>Prospectos <small>{{$nomt->count()}}</small></h1>
                    <div class="ml-auto">
                        <div class="dropdown">
                            <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Acciones con Prospectos
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="{{route('admin.prospects.create')}}">Crea uno a uno</a>
                              <a class="dropdown-item" href="{{route('admin.prospects.import')}}">Inserta un archivo</a>
                              <a class="dropdown-item" href="{{route('admin.prospects.regmat')}}">Busca Prospecto</a>
                            </div>
                        </div>
                    </div>
                </div>                
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success')}}
                    </div>
                @endif                                                                                                                                      
                @if($prospects->count())
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
                                <th>Observaciones</th>
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
                                    <td style="font-size: 0.75rem">{{substr ( $prospect->review, 0, 75);}}</td>
                                    <td style="font-size: 0.85rem">{{$prospect->regis_at}}</td>
                                    <td style="font-size: 0.85rem">{{$prospect->seller->name}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$prospects->links()}}
                @endif
                </div>
            </div>
        </div>
    </div>
@endsection