@extends('layouts.panel')

@section('content')
    <div class="container">
        <div class="row">
            <div class="offset-md-2 col-md-8">
                <div class="card mt-3">
                    <div class="card-body">
                        <div class="d-flex">
                            <h1>Actualiza Prospecto</h1>
                            <div class="ml-auto">                               
                            </div>
                        </div>
                        @if ($errors->count())                                    
                            <div class="alert alert-danger">
                            <ul> 
                                @foreach ($errors->all() as $message)
                                    <li>{{$message}}</li>
                                @endforeach 
                            </ul>
                            </div>
                        @endif

                        <form action="{{url('/prospects/'.$prospect->id)}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="name" class="">Nombre:</label>
                                <input type="text" class="form-control" name="name" 
                                value="{{old('name',$prospect->name)}}" disabled> 
                            </div>
                            <div class="form-group">
                                <label for="phone" class="">Telefono:</label>
                                <input type="text" class="form-control" name="phone"
                                value="{{old('phone',$prospect->phone)}}" disabled>                        
                            </div>
                            <div class="form-group">
                                <label for="movil" class="">Celular:</label>
                                <input type="text" class="form-control" name="movil"
                                value="{{old('movil', $prospect->movil)}}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="email" class="">Correo electrónico</label>
                                <input type="text" class="form-control" name="email"
                                value="{{old('email', $prospect->email)}}" disabled>                        
                            </div>
                            <div class="form-group">
                                <label for="city" class="">Ciudad</label>
                                <input type="text" class="form-control" name="city"
                                value="{{old('city', $prospect->city)}}" disabled>                        
                            </div>
                            <div class="form-group">
                                <label for="address" class="">Dirección</label>
                                <input type="text" class="form-control" name="address"
                                value="{{old('address', $prospect->address)}}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="cp" class="">Código postal</label>
                                <input type="text" class="form-control" name="cp"
                                value="{{old('cp', $prospect->cp)}}" disabled>                        
                            </div>
                            <div class="form-group">
                                <label for="seller_id" class="">Vendedor:</label>
                                <select name="seller_id" id="inputsell" class="form-control" disabled>
                                    <option value="Vendedor"></option>
                                    @foreach ($sellers as $seller)
                                    @if (strcmp($prospect->seller_id,$seller->id) == 0 )
                                            <option value="{{ $seller->id }}" selected>{{ $seller->user->name}}</option>
                                    @else
                                        <option value="{{ $seller->id }}">{{ $seller->user->name }}</option>
                                    @endif   
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="pls" class="">Producto</label>                        
                                <select name="typeofprod" id="pls" class="form-control" disabled>                                    
                                    <option value="TERAPEUTICO" {{strcmp(old('typeofprod', $prospect->typeofprod),'TERAPEUTICO')==0 ? 'selected':''}}>TERAPEUTICO</option>
                                    <option value="DENTAL" {{strcmp(old('typeofprod', $prospect->typeofprod),'DENTAL')==0 ? 'selected':''}}>DENTAL</option>
                                    <option value="VETERINARIO" {{strcmp(old('typeofprod', $prospect->typeofprod),'VETERINARIO')==0 ? 'selected':''}}>VETERINARIO</option>
                                    <option value="SPORT" {{strcmp(old('typeofprod', $prospect->typeofprod),'SPORT')==0 ? 'selected':''}}>SPORT</option>
                                    <option value="BEAUTY" {{strcmp(old('typeofprod', $prospect->typeofprod),'BEAUTY')==0 ? 'selected':''}}>BEAUTY</option>                                    
                                </select>                       
                            </div>
                            <div class="form-group">
                                <label for="status" class="">Status</label>                        
                                <select name="status" id="pls" class="form-control">                                    
                                    <option value="ACTIVO" {{strcmp(old('typeofprod', $prospect->status),'ACTIVO')==0 ? 'selected':''}}>ACTIVO</option>
                                    <option value="INACTIVO" {{strcmp(old('typeofprod', $prospect->status),'INACTIVO')==0 ? 'selected':''}}>INACTIVO</option>
                                    <option value="CERRADO" {{strcmp(old('typeofprod', $prospect->status),'CERRADO')==0 ? 'selected':''}}>CERRADO</option>
                                </select>                       
                            </div>
                            <div class="form-group">
                                <label for="regis" class="">Fecha de seguimiento</label>
                                <input type="date" class="form-control" name="regis_at"
                                value="{{old('regis_at', $prospect->regis_at)}}">                        
                            </div>
                            <div class="form-group">
                                <label for="review" class="">Observaciones</label>
                                <textarea class="form-control" name="review" rows="3">
                                    {{old('review', $prospect->review)}}
                            </textarea>                        
                            </div>
                            <button class="btn-primary float-right">Actualiza Prospecto</button>    
                        </form>
                    </div>
                </div>
            </div>
        </div>   
    </div>
@endsection