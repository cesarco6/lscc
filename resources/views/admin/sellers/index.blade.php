@extends('layouts.panel1')

@section('content')
<div class="card shadow">
    <div class="card-header border-0">
      <div class="row align-items-center">
        <div class="col">
          <h3 class="mb-0">Vendedores</h3>
        </div>
        <div class="col text-right">          
          <a href="{{url('/prospects/prostabl')}}" class="btn btn-sm btn-primary">
            Prospectos
          </a>
        </div>
      </div>
    </div>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success')}}
    </div>
    @endif           
    @if ($sellers->count())
    <div class="table-responsive">
      <!-- Projects table -->
      <table class="table align-items-center table-flush">                          
        <thead class="thead-light">
          <tr>
            <th scope="col">Vendedor</th>
            <th scope="col">prospectos Activos</th>
            <th scope="col">operaciones</th>                    
          </tr>
        </thead>
        <tbody>
          <tr>
            @foreach ($sellers as $item) 
            <th scope="row">
              {{$item->user->name}}
            </th>
            <td>
              {{$item->user->name}}
            </td>
            <td>
              <a href="#" class="btn btn-sm btn-primary">Muestra</a>
              <a href="#" class="btn btn-sm btn-default">Accion 1</a>
            </td>                     
          </tr>
        </tbody>
        @endforeach
      </table>
      @endif
    </div>
  </div>
@endsection