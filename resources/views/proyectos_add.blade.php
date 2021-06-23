@extends('plantilla')
@section('contenido')

    <div class="container">
        <div class="row">
            
            <div class="card">
                <div class="card-header  text-dark text-center font-weight-bold h4">
                    Agregar proyectos
                </div>
                <div class="card-body">
                    @if ($errors->any())
                    <pre> {{$errors}}</pre>
                    @endif
                <form action="{{route('proyecto.store')}}" enctype="multipart/form-data" method="POST" class="row">
                    @csrf
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Titulo</label>
                                <input 
                                    type="text" 
                                    class="form-control border-0 bg-light p-4 font-weight-bold shadow-sm" 
                                    name="titulo">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">
                                    Link de youtube
                                </label>
                                <input 
                                    type="text" 
                                    class="form-control border-0 bg-light p-4 font-weight-bold shadow-sm" 
                                    name="youtube" >
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">
                                    Link de gitHub
                                </label>
                                <input type="text" name="git" class="form-control border-0 bg-light p-4 font-weight-bold shadow-sm">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Descripción</label>
                                <textarea 
                                    name="descripcion" 
                                    id="text-area" 
                                    cols="30" 
                                    rows="5" 
                                    class="form-control md-textarea border-0 bg-light p-4 font-weight-bold shadow-sm">
                                </textarea>
                            </div>
                        </div>

                        <div class="col-4 col-lg-4 col-md-6 col-sm-12  mt-1 text-center">
                            <div class="row">
                                <div class="col-12 card p-3" id="preview0">
                                    <img src="https://picsum.photos/100/100" id="img_tag0" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="file-select" id="src-file1" >
                                <input 
                                    type="file" 
                                    id="imagen_perfil0" 
                                    name="imagen1" 
                                    aria-label="Archivo"
                                    class="contador">
                            </div>
                            @error('imagen')
                                <div class="alert alert-sm alert-danger p-0 font-weight-bold">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>

                        <div class="col-4 col-lg-4 col-md-6 col-sm-12 mt-1 text-center">
                            <div class="row">
                                <div class="col-12 card p-3" id="preview1">
                                    <img src="https://picsum.photos/100/100" class="img-fluid" id="img_tag1" alt="">
                                </div>
                            </div>
                            <div class="file-select" id="src-file1" >
                                <input 
                                    type="file" 
                                    id="imagen_perfil1" 
                                    name="imagen2" 
                                    aria-label="Archivo"
                                    class="contador">
                                    
                            </div>
                            @error('imagen')
                                <div class="alert alert-sm alert-danger p-0 font-weight-bold">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>

                        <div class="col-4 col-lg-4 col-md-6 col-sm-12 mt-1 text-center">
                            <div class="row">
                                
                            </div>
                            
                            <div class="file-select" id="src-file1" >
                                <input 
                                    type="file" 
                                    id="imagen_perfil2" 
                                    name="imagen3" 
                                    aria-label="Archivo"
                                    class="contador">
                            </div>
                            @error('imagen')
                                <div class="alert alert-sm alert-danger p-0 font-weight-bold">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
            
            
            
                        
                        
                        <div class="col-12 mt-4 text-center">
                           <div class="form-group">
                            <button class="btn btn-success" type="submit">
                                <i class="fa fa-plus-square fa-2x"></i>
                            </button>
                           </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection