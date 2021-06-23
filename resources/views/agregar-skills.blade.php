@extends('plantilla')
@section('contenido')
    

<div class="container mt-5 ">
    <div class="row">
        <div class="col-12">            
            @if (session('status'))
            <div class="alert alert-success text-center">
                {{session('status')}}
            </div>
            @endif
            
            @if (session('delete'))
                <div class="alert alert-success text-center">
                  {{session('delete')}}
                </div>
            @endif

            @if (session('edit'))
              <div class="alert alert-success text-center">
                  {{session('edit')}}
              </div>
            @endif

            @if (session('icono'))
            <div class="alert alert-success">
                {{ session('icono')}}
            </div>
            @endif

            @if (session('datos'))
           <div class="alert alert-success text-center">
               {{session('datos')}}
            </div>
            @endif

            @if ($errors->any())
                    {{$errors}}
            @endif
        </div>
    </div>
</div>


<div class="container">
    <nav class="navbar bg-light">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a href="" class="nav-link active">Agregar datos personales</a>
            </li>
        </ul>
    </nav>
</div>



<div class="container">
<div class="row d-flex justify-content-left">
    <div class="col-3">
        <ul class="nav nav-pills mb-3 font-weight-bold card flotante text-center" id="pills-tab" role="tablist">
            <li class="nav-item ">
              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                aria-controls="pills-home" aria-selected="true"><i class="fas fa-futbol mr-2" data-toggle="tooltip" title="Agregar Skills"></i></a>
            </li>

            <li class="nav-item">
              <a class="nav-link " id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                aria-controls="pills-profile" aria-selected="false"><i class="fas fa-sitemap mr-2" data-toggle="tooltip" title="Agregar Proyectos"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
                aria-controls="pills-contact" aria-selected="false"><i class="fas fa-globe-europe mr-2" data-toggle="tooltip" title="Agregar Iconos"></i></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-other" role="tab"
                  aria-controls="pills-contact" aria-selected="false"><i class="fas fa-digital-tachograph mr-2" data-toggle="tooltip" title="Agregar Datos Generales"></i></a>
              </li>

              <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-iconos" role="tab"
                  aria-controls="pills-contact" aria-selected="false"><i class="fas fa-icons mr-2" data-toggle="tooltip" title="Administrar Iconos"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-proyectos" role="tab"
                  aria-controls="pills-contact" aria-selected="false"><i class="fas fa-building mr-2" data-toggle="tooltip" title="Administar Proyectos"></i></a>
              </li>

              <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-comentarios" role="tab"
                  aria-controls="pills-contact" aria-selected="false"><i class="fas fa-envelope-open-text mr-2" data-toggle="tooltip" title="Administar Proyectos"></i></a>
              </li>
              


          </ul>
    </div>
</div>
      <div class="tab-content pt-2 pl-1" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <div class="card animated slideInUp">
                        <div class="card-header bg-primary text-white text-center font-weight-bold h4">Agregar Skills</div>
                        <div class="card-body">
                        <form action="{{route('skill.store')}}" method="POST" >
                            @csrf
                                
                                    <div class="form-group">
                                        <label for="">Titulo</label>
                                        <input type="text" name="nombre" class="form-control">
                                    </div>
                                
                                
                                    <div class="form-group">
                                        <label for="">Color de fondo</label>
                                        <input type="color" name="color" class="form-control">
                                    </div>
                                
                                
                                    <div class="form-group">
                                        <label>Icono</label>
                                        <select class="browser-default custom-select mb-4" name="icono" required>
                                            <option value="" disabled>Choose option</option>
                                            <option value="1" selected>Feedback</option>
                                            @forelse ($iconos as $iconoItem)
                                        <option value="{{$iconoItem->icono}}">{{$iconoItem->nombre}}</option>
                                            @empty
                                            <option value="">vacio</option>  
                                            @endforelse
                                
                                        </select>
                                    </div>
                                
                                
                                   <div class="form-group">
                                    <button class="btn btn-success btn-block btn-sm" type="submit"><h6>Guardar</h6></button>
                                   </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

            <div class="card">
                <div class="card-header bg-dark text-white text-center font-weight-bold h4">AGREGAR PROYECTOS</div>
                <div class="card-body">

                    @if ($errors->any())
                    <pre> {{$errors}}</pre>
                   
                        
                    @endif
                <form action="{{route('proyecto.store')}}" enctype="multipart/form-data" method="POST" class="row">
                    @csrf
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="">Titulo</label>
                                <input type="text" class="form-control" name="titulo">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="">Link de youtube</label>
                                <input type="text" class="form-control" name="youtube" >
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="">Link de gitHub</label>
                                <input type="text" name="git" class="form-control">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Descripción</label>
                                <textarea name="descripcion" id="text-area" cols="30" rows="10" class="form-control md-textarea"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <input type="file" class="form-control" name="imagen1">
                        </div>
                        <div class="col-lg-6">
                            <input type="file" class="form-control" name="imagen2">
                        </div>
                        <div class="col-lg-12 mt-2">
                            <input type="file" class="form-control" name="imagen3">
                        </div>
                        <div class="col-12 mt-4">
                           <div class="form-group">
                            <button class="btn btn-success btn-block btn-sm" type="submit"><h6>Guardar</h6></button>
                           </div>
                        </div>
                    </form>
                </div>
            </div>



        </div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">    
<div class="row justify-content-center">
    <div class="col-5">
        <div class="card  animated slideInUp">
            <div class="card-header font-weight-bold text-center h4 bg-default text-white">AGREGAR ICONO</div>
            <div class="card-body">
            <form action="{{route('icono.store')}}" method="POST">
                @csrf    
        
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" name="nombre">
                        </div>
    
                        <div class="form-group">
                            <label for="icono"><i class='fas fa-icons mr-2'></i>Inserta tu icono aqui</label>
                            <input type="text" class="form-control" id="icono" name="icono" placeholder="Insert your icon here ->">
                        </div>
                        <div class="form-group text-center h1" id="area">

                        </div>
                        <div class="form-group">
                            <button class="btn btn-success btn-sm btn-block" type="submit">ADD</button>
                        </div>
    
                </form>
            </div>
        </div>
    </div>
</div>



        </div>


    

    <div class="tab-pane fade" id="pills-other" role="tabpanel" aria-labelledby="pills-contact-tab">    



        <div class="card">
            <div class="card-header bg-primary text-white text-center font-weight-bold h4">Agregar datos generales</div>
            <div class="card-body">
            <form action="{{route('datos.store')}}" enctype="multipart/form-data" method="POST" class="row">
                @csrf
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="">Nombre completo</label>
                        <input type="text" name="nombre" value="{{old('nombre')}}" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="" class="text-justify">Titulo</label>
                        <input type="text" name="titulo" value="{{old('titulo')}}" class="form-control">
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="">Ubicación</label>
                        <input type="text" name="ubicacion" value="{{old('ubicacion')}}" class="form-control">
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="">Lugar de nacimiento</label>
                        <input type="text" name="nacimiento" class="form-control" value="{{old('nacimiento')}}">
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="">Estado civil</label>
                        <select class="custom-select" id="inputGroupSelect01"  name="estado_civil" value="{{old('estado_civil')}}">
                                <option selected>Seleccionar</option>
                                <option value="Soltero">Soltero</option>
                                <option value="Casado">Casado</option>
                                <option value="Union libre">Union libre</option>
                              </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="">Genero</label>
                        <select class="custom-select" id="inputGroupSelect01" name="genero" value="{{old('genero')}}">
                                <option selected>Seleccionar</option>
                                <option value="Hombre">Hombre</option>
                                <option value="Mujer">Mujer</option>
                                <option value="Afeminado">Otra cosa</option>
                              </select>
                        </div>
                    </div>
                    <div class="col-12 p-2">
                        <label for="">Inserta tu foto</label>
                    <input type="file" class="form-control md-file" name="imagen" value="{{old('imagen')}}">
                    </div>
                    <div class="col-12 mb-3">
                       
                            <label for="" class="text-center m-3 font-weight-bold">Objetivo </label>
                    <textarea name="objetivo" id="text-area" class="form-control" cols="30" rows="10">{{old('objetivo')}}</textarea>
                        
                    </div>
                    <div class="col-6 text-center">
                        <button class="btn  btn-block btn-secondary" type="reset"> <i class="fa fa-window-close mr-3"></i> Cancelar</button>
                    </div>
                    <div class="col-6 text-center">
                        <button class="btn  btn-block btn-primary" type="submit"> <i class="fa fa-save mr-3"></i> Guardar</button>
                    </div>
                </form>
            </div>
        </div>


    </div>
    <div class="tab-pane fade" id="pills-iconos" role="tabpanel" aria-labelledby="pills-contact-tab"> 

<div class="row d-flex justify-content-center">
    <div class="col-9 ">
        <div class="p-4 animated card">
            <h2 class="text-center font-weight-bold ">Administrar iconos</h2>
            <hr>
            <div class="table-wrapper-scroll-y my-custom-scrollbar">
            <table class="table text-center table-bordered table-striped" id="tablas">
              <thead class="bg-default white-text sticky-top">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Icono</th>
                  <th scope="col">Editar</th>
                </tr>
              </thead>
              <tbody>
                <tr>
          
                  @forelse ($iconos as $iconoItem)
                  <th scope="row">{{$iconoItem->id}}</th>
                <td>{{$iconoItem->nombre}}</td>
                <td class="h1">{!!$iconoItem->icono!!}</td>
                <td><button class="btn btn-sm btn-danger btn-block" data-toggle="modal" data-target="#b{{$iconoItem->id}}">Eliminar</button></td>
                </tr>
          
                <div class="modal fade" id="b{{$iconoItem->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog modal-sm" role="document">
                  <div class="modal-content">
                  <div class="modal-header">
                  <h4 class="modal-title w-100" id="myModalLabel">¿Eliminar?</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  </div>
                  <div class="modal-body">
                    <h1 class="text-center">{!!$iconoItem->icono!!}</h1>
                  <form action="{{route('icono.destroy')}}" method="POST">
                      @csrf
                  
                      <div class="row">
                        <div class="col-6"> <button class="btn btn-danger btn-block btn-sm" type="submit">Confirmo</button></div>
                        <div class="col-6">
                    <input type="hidden" value="{{$iconoItem->id}}" name="id">
                    </form>
                  <button type="button" class="btn btn-secondary btn-block btn-sm" data-dismiss="modal">Close</button>
                  </div>
                  </div>
                  </div>
                  </div>
                 
                
          
                  @empty
                      <li>Nothing</li>
                  @endforelse
              </tbody>
            </table>
            </div>
          </div>   
    </div>
</div>

      </div>



      
      <div class="tab-pane fade" id="pills-proyectos" role="tabpanel" aria-labelledby="pills-contact-tab"> 

<div class="row d-flex justify-content-center">
    <div class="col-9">
        <div class=" p-4 card">
            <h3 class="text-center  font-weight-bold">ADMINISTRAR PROYECTOS</h3>
            <hr>
            <div class="table-wrapper-scroll-y my-custom-scrollbar ">
            <table class="table text-center table-bordered table-striped"  id="tabla">
                <thead class="bg-secondary white-text">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Borrar</th>
                  </tr>
                </thead>
                <tbody>
        
          @forelse ($proyecto as $proyectoItem)
          <tr>
          <th scope="row">{{$proyectoItem->id}}</th>
          <td>{{$proyectoItem->nombre}}</td>
          <td> <img src="{{Storage::url($proyectoItem->imagen1)}}" class="w-50" alt=""> </td>
            <td><button class="btn btn-sm btn-danger m-1"  data-toggle="modal" data-target="#b{{$proyectoItem->id}}">Borrar</button></td>
          <td><a href="{{route('proyecto.edit', $proyectoItem->id)}}" class="btn btn-warning btn-sm  m-1">Editar</a></td>
          {{-- <td><button class="btn btn-sm btn-danger m-1"  data-toggle="modal" data-target="#b{{$proyectoItem->id}}">Borrar</button></td> --}}
          </tr>
        </div>
        </div>
    </div>
</div>
  {{-- MODALES DE LOS BOTONES START HERE --}}




<div class="modal fade" id="b{{$proyectoItem->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h4 class="modal-title w-100" id="myModalLabel">¿Borrar {{$proyectoItem->nombre}}?</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{route('proyecto.delete')}}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$proyectoItem->id}}">
       
        <div class="row">
          <div class="col-6"><button type="submit" class="btn btn-danger btn-sm">Confirmo</button></div>
        </form>
          <div class="col-6"><button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button></div>
      </div>
      </div>
    </div>
  </div>
  



  







  {{-- MODALES DE LOS BOTONES END HERE --}}





    @empty
      
    @endforelse
        
        </tbody>
      </table>
    
</div>
     


{{-- Estos los puse para que funcionara el TAB, ni puta idea de por que funciona asi, segun yo los DIV que cierrar abajo ni deberin existir, asi como tu. --}}

      </div>
      </div>
</div>
</div>

{{-- fin delñ comunicado --}}

<div class="tab-pane fade" id="pills-comentarios" role="tabpanel" aria-labelledby="pills-contact-tab"> 

    <div class="row d-flex justify-content-around">

        @forelse ($mensajes as $mensajeItem)
        <div class="col-lg-3 col-md-6 col-sm-12 bg-white shadow p-4 text-center">
        <h3>{{$mensajeItem->nombre}}</h3>
            <p>{{$mensajeItem->mensaje}}</p>
        <strong>{{$mensajeItem->correo}}</strong> <br>
        <small >{{$mensajeItem->created_at->diffForHumans()}}</small>
        </div>       
        @empty
            <h3>Cero mensaje compa</h3>
        @endforelse


    </div>
        
    </div>

      






   
    
</div>














@endsection








