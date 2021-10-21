@extends('layouts.app1')

@section('content')
<div class="container">
    <div class="row">
        <div class="offset-md-3 col-md-6">
            <div class="card mt-3">
                <div class="card-body">
                    @if ($errors->count())                                    
                            <div class="alert alert-danger">
                            <ul> 
                                @foreach ($errors->all() as $message)
                                    <li>{{$message}}</li>
                                @endforeach 
                            </ul>
                            </div>
                        @endif
                    <form action="{{ route('admin.prospects.import.excel') }}" method="post" enctype="multipart/form-data">
                        @csrf                                                
                        <div class="form-group">
                            <input type="file" name="file" class="btn btn-primary">
                        </div>                                    
                        <button class="btn btn-primary">Importar Prospectos</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection