@extends('layouts.panel')

@section('content')
<div class="card shadow">
    <div class="card-header border-0">
      <div class="row align-items-center">
        <div class="col">
          <h3 class="mb-0">Prospectos</h3>
        </div>
        <div class="col text-right">          
          <a href="{{url('/prospects/inicio')}}" class="btn btn-sm btn-primary">
            Vendedores
          </a>
        </div>
      </div>
    </div>
   
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success')}}
    </div>
    @endif           
    @if ($prospects->count())
    <div class="table-responsive">
      <!-- Projects table -->
      <table class="table table-hover table-striped table-bordered">                          
        <thead class="thead-light">
          <tr>                          
            <th scope="col">Nombre</th>
            <th scope="col">Telefono</th><!--
            <th scope="col">Celular</th>
            <th scope="col">email</th>-->
            <th scope="col">Ciudad</th>
            <th scope="col">Producto</th>
            <th scope="col">Status</th>
            <th scope="col">Fecha</th>
            <th scope="col">Vendedor</th>   
            <th scope="col">operaciones</th>              
          </tr>
        </thead>
        <tbody>
          <tr>
            @foreach ($prospects as $prospect)
            <tr>
                <td style="font-size: 0.85rem">{{$prospect->name}}</td>
                <td>{{$prospect->phone}}</td><!--
                <td>{{$prospect->movil}}</td>
                <td style="font-size: 0.75rem">{{$prospect->email}}</td>-->
                <td>{{$prospect->city}}</td>
                <td>{{$prospect->typeofprod}}</td>
                <!--<td style="font-size: 0.75rem">{{substr ( $prospect->review, 0, 75);}}</td>-->
                <td>{{$prospect->status}}</td>
                <td style="font-size: 0.85rem">{{$prospect->regis_at}}</td>
                <td style="font-size: 0.85rem">@foreach($sellers as $sell)
                                                  @if ($sell->id == $prospect->seller_id)
                                                  {{$sell->user->name}}</td>
                                                  @endif
                                                @endforeach                     
            <td>
              <a href="{{url('/prospects/'.$prospect->id.'/edit')}}" 
                class="btn btn-sm btn-primary">Editar</a>
              <form action="{{url('/prospects/'.$prospect->id.'/destroy')}}" method="POST">
                @csrf
                @method('DELETE')  
                <a href="{{url('/prospects/'.$prospect->id.'/destroy')}}"></a>
                <button class="btn btn-sm btn-danger" type="submit">Eliminar</button>
              </form>  
              <a href="{{url('/prospects/'.$prospect->id.'/show')}}" 
                class="btn btn-sm btn-default">Muestra</a>
            </td>                     
          </tr>
        </tbody>
        @endforeach
      </table>
     
      @endif
    </div>
  </div>
@endsection