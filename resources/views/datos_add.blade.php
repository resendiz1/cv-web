@extends('plantilla')

@section('contenido')
    
  <div class="container-fluid bg-light" id="home">
    <div class="row d-flex justify-content-around  shadow-sm p-4">
        <div class="col-12 text-center">
            <h4 class="font-weight-bold">
                Nuevos datos
            </h4>
        </div>
      <div class="col-lg-4 col-md-8 col-sm-12 text-center p-0 mb-3 card bg-white">
        <div class="bg-white p-4" id="preview0">
          <img  class="img-fluid" id="img_tag0" alt="">
        </div>
        
      </div>


<div class="col-lg-12 col-md-6 col-sm-12 text-center">       
     <form action="{{route('datos.store')}}" enctype="multipart/form-data" method="POST">
            @csrf
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
                @error('imagen')
                    <div class="alert alert-sm alert-danger p-0 font-weight-bold">
                        {{$message}}
                    </div>
                @enderror
            </div>
            
            <div class="col-auto">
                <div class="form-group">
                    <input 
                        type="text" 
                        name="nombre" 
                        placeholder="Nombre completo" 
                        class="form-control form-control-lg font-weight-bold bg-white  border-0 shadow-sm text-center p-4 @error('nombre') is-invalid @enderror" 
                        value="{{old('nombre')}}" 
                        autofocus>
                        @error('nombre')
                        <div class="alert alert-sm alert-danger p-0 font-weight-bold">
                            {{$message}}
                        </div>
                        @enderror
                </div>
            </div>

            <div class="col-auto">
                <div class="form-group">
                    <input 
                        type="text" 
                        placeholder="Titulo en:" 
                        class="form-control form-control-lg bg-white  shadow-sm text-center p-4 border-0 @error('titulo') is-invalid @enderror" 
                        name="titulo" 
                        value="{{old('titulo')}}">
                    @error('titulo')
                    <div class="alert alert-sm alert-danger p-0 font-weight-bold">
                        {{$message}}
                    </div>
                    @enderror
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
                            class="form-control text-center @error('ubicacion') is-invalid @enderror" 
                            name="ubicacion" 
                            value="{{old('ubicacion')}}">
                        @error('ubicacion')
                        <div class="alert alert-sm alert-danger p-0 font-weight-bold">
                            {{$message}}
                        </div>
                        @enderror
                    </label>
                </div>

                <div class="col-auto">
                    <label for="">
                        <strong>
                            Lugar de nacimiento
                        </strong>
                        <input 
                            type="text" 
                            class="form-control text-center @error('nacimiento') is-invalid @enderror" 
                            name="nacimiento" 
                            value="{{old('nacimiento')}}">
                        
                            @error('nacimiento')
                                <div class="alert alert-sm alert-danger p-0 font-weight-bold">
                                    {{$message}}
                                </div>
                            @enderror
                    </label>
                </div>

                <div class="col-auto">
                    <label for="">
                        <strong>
                            Estado civil
                        </strong>
                        <input 
                            type="text" 
                            class="form-control text-center @error('estado_civil') is-invalid @enderror" name="estado_civil" 
                            value="{{old('estado_civil')}}">
                            
                        @error('estado_civil')
                        <div class="alert alert-sm alert-danger p-0 font-weight-bold">
                            {{$message}}
                        </div>
                        @enderror
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
                                class="form-control text-start @error('objetivo') is-invalid @enderror">{{old('objetivo')}}
                            </textarea>
                            @error('objetivo')
                            <div class="alert alert-sm alert-danger p-0 font-weight-bold">
                                {{$message}}
                            </div>
                            @enderror
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