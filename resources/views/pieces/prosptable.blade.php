 <div class="container">              
        <div class="card mt-3">                        
            <div class="card-body">
                <div class="d-flex">                   
                    <div class="ml-auto">
                        
                    </div>
                </div>                
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success')}}
                    </div>
                @endif                                                                                                                                      
                @if($prospects->count())
                <div class="table-responsive">
                    <table class="table table-hover table-striped table-bordered table-responsive">
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
                                    <td style="font-size: 0.75rem">{{substr ( $prospect->review, 0, 75);}}</td>
                                    <td style="font-size: 0.85rem">{{$prospect->regis_at}}</td>
                                    <td style="font-size: 0.85rem">@foreach($seller as $sell)
                                                                      @if (strcmp($sell->id, $prospect->seller_id))
                                                                      {{$sell->user->name}}</td>
                                                                      @endif
                                                                    @endforeach  
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