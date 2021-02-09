@extends('plantilla')

@section('contenido')

<div class="container">
    
    <div class="row bg-white shadow p-4 d-flex justify-content-center">
        <div class="col-12">
            <h3 class="text-center m-3 font-weight-bold">Editando proyecto</h3>
        </div>
        <div class="col-8 card p-3">
        <form action="{{route('proyecto.update', $proyecto)}}" enctype="multipart/form-data" method="POST" >
                @csrf @method('PATCH')
                   
                        <div class="form-group">
                            <label for="">Titulo</label>
                        <input type="text" class="form-control" name="titulo" value="{{$proyecto->nombre}}" >
                        </div>
                      <input type="hidden" name="id" >
                  
                        <div class="form-group">
                            <label for="">Link de youtube</label>
                        <input type="text" class="form-control" name="youtube" value="{{$proyecto->url_youtube}}"  >
                        </div>
                  
                   
                        <div class="form-group">
                            <label for="">Link de gitHub</label>
                        <input type="text" name="git" class="form-control" value="{{$proyecto->url_youtube}}" >
                        </div>
                   
                    
                        <div class="form-group">
                            <label for="">Descripción</label>
                        <textarea name="descripcion" id="text-area" cols="30" rows="10" class="form-control md-textarea">{!!$proyecto->descripcion!!}</textarea>
                        </div>
                    
                    
                        <input type="file" class="form-control" name="imagen1">
                  
                    
                        <input type="file" class="form-control" name="imagen2">
                    
               
                        <input type="file" class="form-control" name="imagen3">
              
                       <div class="form-group">
                        <button class="btn btn-success btn-block btn-sm" type="submit"><h6>Guardar</h6></button>
                       </div>
                    
                </form>
        </div>
    </div>
</div>
    
@endsection