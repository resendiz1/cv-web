@extends('plantilla')
@section('contenido')

{{-- Mensajes de session --}}
@if (session('icono_agregado'))
<div class="alert alert-success text-center font-weight-bold">
  {{session('icono_agregado')}}
</div>
@endif


@if (session('status'))
<div class="alert alert-success text-center font-weight-bold">
  {{session('status')}}
</div>
@endif

@if (session('updated'))
<div class="alert alert-success text-center font-weight-bold">
  {{session('updated')}}
</div>
@endif

@if (session('add'))
<div class="alert alert-success text-center font-weight-bold"> 
  {{session('add')}}
</div>
@endif


@if (session('edit'))
<div class="alert alert-success text-center font-weight-bold"> 
  {{session('edit')}}
</div>
@endif

@if (session('datos'))
<div class="alert alert-success text-center font-weight-bold"> 
  {{session('datos')}}
</div>
@endif

@if (session('proyecto_eliminado'))
  <div class="alert alert-success text-center font-weight-bold">
    {{session('proyecto_eliminado')}}
  </div>    
@endif

@if (session('habilidad_borrada'))
    <div class="alert alert-sm alert-danger text-center font-weight-bold p-2">
        {{session('habilidad_borrada')}}
    </div>
@endif

{{-- Mensajes de session --}}
<div class="container flotante3">
  <div class="row d-flex ">
  
    <div class="col-3 col-lg-1 col-md-2 col-sm-2 m-1  bg-primary text-center  rounded ">
      <a href="#home" class="text-white">
        <i class="fa fa-home "></i> <br>
        <strong>Inicio </strong>
      </a>
    </div>
  
    <div class="col-3 col-lg-1 col-md-2 col-sm-2 m-1  text-center bg-info  rounded">
      <a href="#portafolio" class="text-white ">
          <i class="fa fa-briefcase"></i><br>
            <strong>
              Portafolio
            </strong> 
      </a>
    </div>
    
    <div class="col-3 col-lg-1 col-md-2 col-sm-2 col-lg-1 m-1  bg-default text-center  rounded">
      <a href="#skills" class="text-white">
        <i class="fa fa-magic"></i><br>
        <small>
          Habilidades
        </small>
      </a>
    </div>

    
    @auth 
    <div class="col-3 col-lg-1 col-md-2 col-sm-2 col-lg-1 m-1 bg-dark text-center  rounded">
      <a href="{{route('mensajes.index')}}" class="text-white">
        <i class="fa fa-envelope-open-text"></i><br>
        <small>Mensajes</small>
      </a>
    </div>


    
    @else
    <div class="col-3 col-lg-1 col-md-2 col-sm-2 col-lg-1 m-1 bg-danger text-center  rounded">
      <a href="{{route('login')}}" class="text-white">
        <i class="fa fa-key"></i><br>
        <small>Login</small>
      </a>
    </div>
    @endauth
    
  </div>
</div>  




  
    <div class="container-fluid shadow navbar-light bg-white sticky-top" >
      <div class="row d-flex justify-content-between bg-white text-center p-2" >
        
        <div class="col-4">
          <a href="https://www.facebook.com/arturito.resendiz/" target="_blank" class="text-primary">
            <i class="fab fa-facebook mr-2 fa-2x"></i>
          </a>
        </div>
    
        <div class="col-4">
          <a href="https://github.com/resendiz1" target="_blank" class="text-dark">
            <i class="fab fa-github mr-2 fa-2x"></i>
          </a>
        </div>
    
        <div class="col-4">
          <a class="text-dark"  href="tel:+522491725430">
            <i class="fas fa-phone mr-2 fa-2x"></i>
          </a>
        </div>  
      </div>
  </div>

  <div class="container-fluid" id="home">
    <div class="row d-flex justify-content-around  shadow-sm m-5" style="background-color: #f9f9f9">
      @auth
      <div class="col-12 text-center mt-3">
        @if ($last!=null)
          <a href="{{route('datos.update', $last->id )}}" class="m-2 btn btn-default rounded-pill py-0 px-4">
            <i class="fa fa-table mr-2"></i> 
            Editar  
          </a>
        @endif
        <br>
        <a href="{{route('datos.create')}}">  
          Agregar datos personales
        </a>
      </div>
      @endauth
      
      @if ($last!= null)                  

      <div class="col-lg-4 col-md-8 col-sm-12 col-xs-12 text-center p-0 mb-3 card bg-white">
        <div class="bg-white p-lg-3 p-3">
          <img src="{{Storage::url($last->imagen)}}" class=" img-fluid" alt="">
        </div>
      </div>

      <div class="col-lg-12 col-md-6 col-sm-12 text-center">
            <h2> 
              <strong> 
                {{$last->nombre}} 
              </strong> 
            </h1>   
          
            <h3>
              <strong> 
                {{$last->titulo}} 
              </strong> 
            </h3>        
      </div>
      {{-- Datos adicionales  --}}
      <div class="col-10 ">
        <div class="row d-flex justify-content-around">
          
          <div class="col-auto">
            <strong>
              Ubicación: 
            </strong>
              {{$last->ubicacion}}
          </div>
          
          <div class="col-auto">
            <strong>
              Lugar de nacimiento: 
            </strong>
            {{$last->lugar_nacimiento}}
          </div>

          <div class="col-auto">
            <strong>Estado civil: </strong>{{$last->estado_civil}}
          </div>

          <div class="col-auto">
            <strong>Objetivo: </strong>{{$last->objetivo}}
          </div>

        </div>
        <br>
      
      </div>

          
      @else
        <div class="col-12 text-center">
          <strong class="italic">
            Base de datos vacia
          </strong>
        </div>
      @endif
    </div>
  </div>
  



  <br id="portafolio">

  <div class="container-fluid  mt-5" style="background-color: #F9F4F4" >
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-8 col-sm-12 text-center">
          <h2 class="font-weight-bold my-0">
            Portafolio
          </h2>
        @auth
        <a href="{{route('proyecto.create')}}" class=" ml-2">
          Agregar proyecto al protafolio
        </a>
        @endauth
      </div>
    </div>
  
  
  <div class="row p-4 d-flex justify-content-around" >
    @forelse ($proyectos as $proyectosItem)
    <div class="col-lg-3 col-md-6 col-sm-12 m-0 mb-4 p-0 mx-1">
         
      <div class="card ">
        <div class="card-header h5 text-center text-white azulito p-1">
          {{$proyectosItem->nombre}}
        </div>

        <div class="card-body">

          <div id="a{{$proyectosItem->id}}" class="carousel slide mb-2" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="{{Storage::url($proyectosItem->imagen3)}}"
                  alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{Storage::url($proyectosItem->imagen2)}}"
                  alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{Storage::url($proyectosItem->imagen1)}}"
                  alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#a{{$proyectosItem->id}}" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#a{{$proyectosItem->id}}" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        
          <div class="row d-flex justify-content-center">
            

            <div class="col-12 mt-4 mb-0 text-start"> 
              <h5>
                Descripción:
              </h5>
              <p class="p-0 m-0">
                 {!!$proyectosItem->descripcion!!}
              </p>
            </div>

            <div class="col-6 text-center">
              <a href="{{$proyectosItem->url_git}}" target="_blank" class="btn btn-black btn-sm">GitHub</a>
            </div>
            <div class="col-6 text-center">
              <a href="{{$proyectosItem->url_youtube}}" class="btn btn-danger btn-sm">Youtube</a>
            </div>
          
          </div>
        </div>
        
        @auth
        <div class="card-footer text-justify text-center">
          <a data-toggle="modal" data-target="#b{{$proyectosItem->id}}" class="btn btn-danger px-4 py-1">
            <i class="fa fa-trash "></i>
          </a>  
          <a href="{{route('proyectos.update', $proyectosItem->id)}}" class="btn btn-secondary px-4 py-1">
            <i class="fa fa-table "></i>
          </a>
        </div>
        @endauth

      </div>
   
@auth
<!-- Modal -->
<div class="modal fade" id="b{{$proyectosItem->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white">
        <h4 class="font-weight-bold" id="exampleModalLabel">Borrar</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('proyectos.delete', $proyectosItem->id)}}" method="POST">
          @csrf
          <input type="hidden" name="nombre" value="{{$proyectosItem->nombre}}">
          <h3>
            {{$proyectosItem->nombre}}
          </h3>
        </div>
        <div class="modal-footer">
          <button  class="btn btn-danger">Eliminar</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
@endauth



      </div>
          @empty
            <strong>
              Portafolio vacio
            </strong> 
          @endforelse
        </div>  
      </div>


<br id="skills">
<div class="container-fluid bg-white mt-5">
  
  <div class="row  d-flex justify-content-center mb-3">
    <div class="col-lg-4 col-md-8 col-sm-12 text-center">
      <h2 class="font-weight-bold  text-center  py-0">
          Habilidades
        </h2>
        @auth
        <a href="{{route('habilidades.create')}}">
          Agregar habilidad nueva
        </a>
        @endauth
     
    </div>
  </div>

  <div class="row p-1 card">
        <div class="skills col-lg-12 p-3 text-center">
          @forelse ($skill as $skillItem)   
          <div class="text-white shadow-sm m-2 " style="background: {{$skillItem->color}}">
            <h3>
              {!! $skillItem->icono !!}
            </h3>    
            <strong class="text-uppercase">
              {{$skillItem->nombre}}
            </strong>
            @auth
            <br>
            <form action="{{route('habilidades.delete', $skillItem->id)}}" method="POST">
              @csrf
              <button class="btn btn-sm btn-danger">
                <i class="fa fa-trash fa-2x"></i>
              </button>
            </form>
            @endauth
          </div>       
          @empty
            <li class="font-weight-bold text-center">
              Base de datos vacia
            </li>
        @endforelse
        </div>

        {{-- Esconde el boton que agrega los iconos --}}
        @auth
        <a href="{{route('iconos.create')}}" class="p-1 bnt-sm text-center">
          <i class="fa fa-plus"></i>
          Agregar Iconos
        </a>
        @endauth
        {{-- Esconde el boton que agrega los iconos --}}

      </div>
    </div>
  </div>
  
  
  
  <br>
  <br>
  <br>
  <br>

  <div class="container-fluid mt-5" style="background-color: #f9f9f9">
    <div class="row p-4 mt-5">
      <div class="col-lg-6 col-ms-12 p-5">
        <div class="row d-flex justify-content-center">
          <div class="col-12">
            <h4 class="text-center font-weight-bold mb-5">Contáctame por otros medios</h4>
          </div>
          <div class="col-6 p-1  text-center">
            <a href="https://www.facebook.com/arturito.resendiz/" target="_blank" >
            <i class="fab fa-facebook fa-3x"></i>
            <h5 class="text-center text-dark">
              Facebook</h5></a>
          </div>
          <div class="col-6 p-1  text-center">
            <a class="text-success" target="_blank" href="https://api.whatsapp.com/send?phone=522491725430">
            <i class="fab fa-whatsapp fa-3x"></i>
            <h5 class="text-center text-dark">Whatsapp</h5> </a>
          </div>

          <div class="col-6 p-1 text-center">
            <a href="tel:522491725430">
            <i class="fa fa-phone fa-3x"></i>
            </a>
            <h5 class="text-center">249-172-54-30</h5>
          </div>

          <div class="col-6 p-0  text-center">
            <i class="fa fa-envelope-open-text fa-3x"></i>
            <h5 class="text-center">resendiz.galleta@gmail.com</h5>
          </div>

        </div>
      </div>


  <div class="col-lg-6 col-ms-12">
  
  
    <form class="text-center p-5" method="POST" action="{{route('mensaje.store')}}">
          @csrf
          <p class="h4 mb-4">Formaulario de contacto</p>
        
          <input 
            type="text" 
            id="defaultContactFormName" 
            name="nombre" 
            class="form-control mb-4" 
            placeholder="Nombre">
        
          <input 
            type="email" 
            id="defaultContactFormEmail" 
            name="correo" 
            class="form-control mb-4" 
            placeholder="E-mail">
        
          <div class="form-group">
              <textarea 
                class="form-control rounded-0" 
                name="mensaje" 
                id="exampleFormControlTextarea2" 
                rows="3" 
                placeholder="Mensaje"></textarea>
          </div>

          <button class="btn btn-dark btn-block" type="submit">Enviar</button>  
    </form>  
  </div>


      
    </div>
  </div>
  
  <br>
  <br>

  @endsection