@extends('plantilla')
@section('contenido')

{{-- Mensajes de session --}}
@if (session('status'))
<div class="alert alert-success text-center font-weight-bold">
  {{session('status')}}
</div>
@endif


@if (session('add'))
<div class="alert alert-success text-center font-weight-bold"> 
  {{session('add')}}
</div>
@endif


@if (session('edit'))
<div class="alert alert-success text-center"> 
  {{session('edit')}}
</div>
@endif

@if (session('datos'))
<div class="alert alert-success text-center"> 
  {{session('datos')}}
</div>
@endif
{{-- Mensajes de session --}}
<div class="container">
  <div class="row d-flex flex-column  pl-3 font-weight-bold justify-content-around flotante2">
    
    <a href="{{route('inicio')}}" class="m-2 btn btn-dark btn-sm">
      <i class="fas fa-home fa-2x"></i>
    </a>
    
    <a href="{{route('skills')}}" class="m-2 btn btn-dark btn-sm">
      <i class="fa fa-cogs fa-2x"></i>
    </a>

    <a href="{{route('datos.update', $last->id )}}" class="m-2 btn btn-dark btn-sm">
      Editar  
    </a>

  </div>
</div>




<div class="container flotante3">
  <div class="row d-flex flex-column">
  
    <div class="col-1 bg-primary text-center p-2 rounded mb-3">
      <a href="#home" class="text-white">
        <i class="fa fa-home fa-2x"></i><br>
        <small>Inicio </small>
      </a>
  </div>
  
    <div class="col-1 bg-primary text-center p-2 rounded mb-3">
        <a href="#portafolio" class="text-white">
          <i class="fa fa-briefcase fa-2x"></i>
          <small>Portafolio</small>
        </a>
    </div>
    
    <div class="col-1 bg-primary text-center p-2 rounded">
      <a href="#skills" class="text-white">
        <i class="fa fa-magic fa-2x"></i>
        <small>Habilidades</small>
      </a>
    </div>

  </div>
</div>  




  
    <div class="container-fluid shadow navbar-light bg-white sticky-top" >
      <div class="row p-1 d-flex justify-content-between bg-white text-center" >
        
        <div class="col-lg-3 col-md-3 col-sm-12 mt-2">
          <a href="https://www.facebook.com/arturito.resendiz/" target="_blank" class="text-primary">
            <i class="fab fa-facebook mr-2 fa-2x"></i>
          </a>
        </div>
    
        <div class="col-lg-3 col-md-3 col-sm-12 mt-2">
          <a href="https://github.com/resendiz1" target="_blank" class="text-dark">
            <i class="fab fa-github mr-2 fa-2x"></i>
          </a>
        </div>
    
        <div class="col-lg-3 col-md-3 col-sm-12 mt-2">
          <a class="text-danger" href="mail:resendiz.galleta@gmail.com">
            <i class="fas fa-mail-bulk mr-2 fa-2x"></i>
          </a>
        </div>
    
        <div class="col-lg-3 col-md-3 col-sm-12 mt-2">
          <a class="text-dark" target="_blank" href="tel:+522491725430">
            <i class="fas fa-phone mr-2 fa-2x"></i>
          </a>
        </div>  

      
      </div>
  </div>



  <div class="container-fluid mt-5" id="home">
    <div class="row d-flex justify-content-around ">

      @if ($last!= null)                  

      <div class="col-lg-4 col-md-8 col-sm-12 text-center centradito p-0 mb-3 card bg-white">
        <div class="bg-white p-4">
          <img src="{{Storage::url($last->imagen)}}" class=" img-fluid" alt="">
        </div>
      </div>

      <div class="col-lg-12 col-md-6 col-sm-12 text-center">
            <h1> 
              <strong> 
                {{$last->nombre}} 
              </strong> 
            </h1>   
          
            <h2>
              <strong> 
                {{$last->titulo}} 
              </strong> 
            </h2>        
      </div>
      {{-- Datos adicionales  --}}
      <div class="col-10">
        <div class="row d-flex justify-content-around">
          
          <div class="col-auto">
            <strong>Ubicación: </strong>{{$last->ubicacion}}
          </div>
          
          <div class="col-auto">
            <strong>Lugar de nacimiento: </strong>{{$last->lugar_nacimiento}}
          </div>

          <div class="col-auto">
            <strong>Estado civil: </strong>{{$last->estado_civil}}
          </div>

          <div class="col-auto mt-2">
            <strong>Objetivo: </strong>{{$last->objetivo}}
          </div>

        </div>
      </div>

          
      @else
        <div class="col-12 text-center">
          <li class="font-weight-bold">Nada por aqui</li>
        </div>
      @endif
    </div>
  </div>
  




  <div class="container-fluid  bg-white mt-5" id="portafolio">
    <div class="row mt-2 d-flex justify-content-center p-2">
      <div class="col-6 p-0">
        <h2 class="font-weight-bold card-header bg-primary text-center text-white">
          Portafolio
        </h2>
      </div>
    </div>
  
  
  <div class="row p-4" >
    @forelse ($proyectos as $proyectosItem)
    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
         
      <div class="card ">
        <div class="card-header h5 text-center text-white azulito">
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
          <div class="row text-center ">
            <div class="col-6">
              <a href="{{$proyectosItem->url_youtube}}" target="_blank" class="text-danger"> <i class="fab fa-youtube mr-2"></i> Video
              </a>

              </div>
            <div class="col-6">
              <a href="{{$proyectosItem->url_git}}" target="_blank" class="text-black ml-3"> <i class="fab fa-github"></i> Repositorio </a>
            </div>
          </div>
        </div>
        <div class="card-footer text-justify">
          {!!$proyectosItem->descripcion!!}
        </div>
      </div>
   
  

</div>
    @empty
       <li class="m-4 font-weight-bold">Nada por aqui</li> 
    @endforelse
  
  
  </div>
  
</div>


<div class="container-fluid bg-white mt-5" id="skills">
  
  <div class="row d-flex justify-content-center">
    <div class="col-6 bg-primary text-white text-center rounded">
      <h2 class="font-weight-bold m-2">Habilidades en:</h2>
    </div>
  </div>

  <div class="row justify-content-around p-3">
    @forelse ($skill as $item)
        <div class="col-2 text-white p-3 rounded m-1 text-center" style="background-color: {{$item->color}}">
          <h5>
            {!!$item->icono!!}
          </h5>
          <h5>
            {{$item->nombre}}
          </h5>
        </div>
    @empty
        
    @endforelse
  




  
  {{-- <div class="row p-1 card">
   <div class="col-12 ">
    <h2 class="font-weight-bold m-2">Habilidades en:</h2>
      </div>
        <div class="skills col-lg-12 p-3 text-center">
          @forelse ($skill as $skillItem)   
          <div class="text-white shadow-sm  " style="background: {{$skillItem->color}}">
            <h3>
              {!! $skillItem->icono !!}
            </h3>    
            <strong class="text-uppercase">
              {{$skillItem->nombre}}
            </strong>
          </div>       
        @empty
            <li class="m-5 font-weight-bold">No hay nada aqui</li>
        @endforelse
      </div>
    </div>
  </div> --}}
  </div>
  <hr>

  <div class="container-fluid mt-5 bg-white">
    <div class="row p-4">
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
        
          <input type="text" id="defaultContactFormName" name="nombre" class="form-control mb-4" placeholder="Nombre">
        
          <input type="email" id="defaultContactFormEmail" name="correo" class="form-control mb-4" placeholder="E-mail">
        
          <div class="form-group">
              <textarea class="form-control rounded-0" name="mensaje" id="exampleFormControlTextarea2" rows="3" placeholder="Mensaje"></textarea>
          </div>

          <button class="btn btn-dark btn-block" type="submit">Enviar</button>  
    </form>  
  </div>


      
    </div>
  </div>
  
  <br>
  <br>

  @endsection