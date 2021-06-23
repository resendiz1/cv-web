@extends('plantilla')
@section('contenido')

<div class="container">
    <div class="row bg-white shadow p-4 d-flex justify-content-center">
        <div class="col-12">
            <h3 class="text-center m-3 font-weight-bold">Editando proyecto</h3>
        </div>
        <div class="col-8 card p-3">
        <form action="#" enctype="multipart/form-data" method="POST" >
                @csrf @method('PATCH')
                <div class="form-group">
                    <label for="" class="font-weight-bold h5">
                        Titulo
                    </label>
                        <input 
                            type="text" 
                            class="form-control bg-light shadow-sm p-3 font-weight-bold" 
                            name="titulo" 
                            value="{{$proyecto->nombre}}">
                </div>
                      <input type="hidden" name="id" >
                <div class="form-group">
                <label for="" class="font-weight-bold h5">
                      Link de youtube
                </label>
                   <input 
                        type="text" 
                        class="form-control bg-light shadow-sm p-3 font-weight-bold" 
                        name="youtube" 
                        value="{{$proyecto->url_youtube}}"  >
                </div>
                  
                   
                 <div class="form-group">
                            <label for="" class="font-weight-bold h5">
                                Link de gitHub
                            </label>
                        <input 
                            type="text" 
                            name="git" 
                            class="form-control bg-light shadow-sm p-3 font-weight-bold" 
                            value="{{$proyecto->url_youtube}}" >
                        </div>
                   
                    
                        <div class="form-group">
                            <label for="">Descripción</label>
                        <textarea 
                            name="descripcion" 
                            id="text-area" 
                            cols="30" 
                            rows="10" 
                            class="form-control md-textarea">{!!$proyecto->descripcion!!}</textarea>
                        </div>
                    
                    <div class="row">

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
                                    <img src="https://picsum.photos/100/100" id="img_tag1" class="img-fluid" alt="">
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
                                <div class="col-12 card p-3" id="preview2">
                                    <img src="https://picsum.photos/100/100" id="img_tag2" class="img-fluid" alt="">
                                </div>
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
            
                    </div>

                       <div class="form-group">
                        <button class="btn btn-success btn-block btn-sm" type="submit"><h6>Guardar</h6></button>
                       </div>
                    
                </form>
        </div>
    </div>
</div>
    
@endsection