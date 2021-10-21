@extends('layouts.app1')

@section('content')
    <div class="container">
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <div class="card mt-3">
                    <div class="card-body">
                        <div class="d-flex">
                            <h1>Crea Prospecto</h1>
                            <div class="ml-auto">
                                <!--
                                <div class="dropdown">
                                    <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Acciones
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="{{route('admin.prospects.dashboard')}}">Dashboard</a>
                                    <a class="dropdown-item" href="#">Actualiza</a>
                                    <a class="dropdown-item" href="#">Borra</a>
                                    </div>
                                </div>
                            -->
                            </div>
                        </div>
                        <hr>
                        @if ($errors->count())                                    
                            <div class="alert alert-danger">
                            <ul> 
                                @foreach ($errors->all() as $message)
                                    <li>{{$message}}</li>
                                @endforeach 
                            </ul>
                            </div>
                        @endif

                        <form action="{{route('admin.prospects.store')}}" method="POST">
                            @csrf
                             
                            <div class="form-group">
                                <label for="name" class="">Nombre:</label>
                                <input type="text" class="form-control" name="name">                        
                            </div>
                            <div class="form-group">
                                <label for="phone" class="">Telefono:</label>
                                <input type="text" class="form-control" name="phone">                        
                            </div>
                            <div class="form-group">
                                <label for="movil" class="">Celular:</label>
                                <input type="text" class="form-control" name="movil">                        
                            </div>
                            <div class="form-group">
                                <label for="email" class="">Correo electrónico</label>
                                <input type="text" class="form-control" name="email">                        
                            </div>
                            <div class="form-group">
                                <label for="city" class="">Ciudad</label>
                                <input type="text" class="form-control" name="city">                        
                            </div>
                            <div class="form-group">
                                <label for="seller_id" class="">Vendedor:</label>
                                <select name="seller_id" id="inputsell" class="form-control">
                                    <option value="">-- Elija a el vendedor</option>
                                    @foreach ($sellers as $seller)
                                        <option value="{{ $seller['id'] }}">{{ $seller['id'] }}. {{ $seller['name'] }}
                                        </option>    
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="product" class="">Producto</label>                        
                                <select name="typeofprod" id="pls" class="form-control">
                                    <option value="TERAPEUTICO">TERAPEUTICO</option>
                                    <option value="DENTAL">DENTAL</option>
                                    <option value="VETERINARIO">VETERINARIO</option>
                                    <option value="SPORT">SPORT</option>
                                    <option value="BEAUTY">BEAUTY</option>
                                </select>                       
                            </div>
                            
                            <div class="form-group">
                                <label for="regis" class="">Fecha de registro</label>
                                <input type="date" class="form-control" name="regis_at">                        
                            </div>
                            <div class="form-group">
                                <label for="review" class="">Observaciones</label>
                                <textarea class="form-control" name="review" rows="3"></textarea>                        
                            </div>
                            <button class="btn-primary float-right">Crea Prospecto</button>    

                        </form>
                    </div>
                </div>
            </div>
        </div>   
    </div>
@endsection