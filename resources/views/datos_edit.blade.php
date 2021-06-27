@extends('plantilla')

@section('contenido')
    
  <div class="container-fluid bg-light" id="home">
    <div class="row d-flex justify-content-around  shadow-sm p-4">
        <div class="col-12 text-center">
            <h4 class="font-weight-bold">Editando</h4>
        </div>
      <div class="col-lg-4 col-md-8 col-sm-12 text-center centradito p-0 mb-3 card bg-white">
        <div class="bg-white p-4" id="preview0">
          <img src="{{Storage::url($datos->imagen)}}" class="img-fluid" id="img_tag0" alt="">
        </div>
        
      </div>


<div class="col-lg-12 col-md-6 col-sm-12 text-center">
        
     <form action="{{route('datos.edit', $datos->id)}}" method="POST" enctype="multipart/form-data">
        @csrf @method('PATCH')
        <div class="row d-flex justify-content-center">
            <div class="col-auto mt-1">
                <div class="file-select" id="src-file1" >
                    <input 
                        type="file" 
                        id="imagen_perfil0" 
                        name="imagen" 
                        aria-label="Archivo"
                        class="contador">
                  </div>
            </div>

            <div class="col-auto">
                <div class="form-group">
                    <input 
                        type="text" 
                        class="form-control form-control-lg font-weight-bold bg-white  border-0 shadow-sm text-center p-4" 
                        value="{{$datos->nombre}}" 
                        name="nombre"
                        autofocus>
                </div>
            </div>
            <div class="col-auto">
                <div class="form-group">
                    <input 
                        type="text" 
                        class="form-control form-control-lg bg-white border-0 shadow-sm text-center p-4" 
                        value="{{$datos->titulo}}"
                        name="titulo"    >
                </div>
            </div>
             
                               
        </div>

        <div class="row d-flex justify-content-center">
            {{-- Datos adicionales  --}}
            <div class="col-10">
                <div class="row d-flex justify-content-around">
      
                <div class="col-auto">
                    <label for="">
                        <strong>
                            Ubicación
                        </strong>
                        <input 
                            type="text" 
                            class="form-control text-center" 
                            value="{{$datos->ubicacion}}"
                            name="ubicacion">
                    </label>
                </div>
                <div class="col-auto">
                    <label for="">
                        <strong>
                            Lugar de nacimiento
                        </strong>
                        <input 
                            type="text" 
                            class="form-control text-center" 
                            value="{{$datos->lugar_nacimiento}}"
                            name="nacimiento">
                    </label>
                </div>

                <div class="col-auto">
                    <label for="">
                        <strong>
                            Estado civil
                        </strong>
                        <input 
                            type="text" 
                            class="form-control text-center" 
                            value="{{$datos->estado_civil}}"
                            name="estado_civil">
                    </label>
                </div>

                <div class="col-12">
                    <label for="">
                        <strong>
                            Objetivo: 
                        </strong>
                            <textarea 
                                type="text" 
                                cols="100" 
                                rows="6"
                                name="objetivo" 
                                class="form-control text-start">{{$datos->objetivo}}</textarea>
                    </label>
                </div>

                </div>
            </div>

            <div class="col-12">
                <button class="btn btn-success  strong">
                    <i class="fa fa-check-square fa-2x"></i>
                    <br>
                        Guardar
                </button>
            </div> 
        </div>
    </form>
</div>

    
    </div>
  </div>   
@endsection