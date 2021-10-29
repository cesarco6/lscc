@extends('layouts.panel')

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
                                <div class="filegroup">
                                    <input type="file" name="file" id="file-input"
                                    accept=".xlsx, .xls, .cvs">
                                <label for="file-input">    
                                    Selecciona el archivo
                                </label>
                                <br> 
                                <span>     
                                    <strong>Archivo elegido:</strong>
                                    <span id="file-name">Ninguno</span>
                                </span>
                                </div>
                        </div>                                    
                        <button class="btn btn-default" id="buttEna"><i class="fas fa-file-upload"></i> Da click aqui para subirlo</button>
                    </form>
                        <script>
                            let inputFile = document.getElementById('file-input');
                            let fileNameField = document.getElementById('file-name');
                            let enablebutton = document.getElementById('buttEna');
                            enablebutton.disabled = true;
                            inputFile.addEventListener("change", 
                            function(event){
                                let uploadedFileName = event.target.files[0].name;
                                fileNameField.textContent = uploadedFileName;
                                enablebutton.disabled = false;
                            })
                        </script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection