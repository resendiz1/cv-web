@extends('plantilla')

@section('contenido')



@if (session('status'))
<div class="alert alert-success text-center font-weight-bold">{{session('status')}}</div> 
  @endif
  @if (session('add'))
  <div class="alert alert-success text-center"> {{session('add')}}</div>
   @endif
   @if (session('edit'))
   <div class="alert alert-success text-center"> {{session('edit')}}</div>
    @endif
   @if (session('datos'))
   <div class="alert alert-success text-center"> {{session('datos')}}</div>
    @endif
<div class="container-fluid shadow bg-primary sticky-top ">
    <div class="row p-1 d-flex justify-content-between text-center">
      <div class="col-lg-3 col-md-3 col-sm-12 mt-2"><a href="https://www.facebook.com/arturito.resendiz/" target="_blank" class="text-white"><i class="fab fa-facebook mr-2"></i>Facebook</a></div>
  
      <div class="col-lg-3 col-md-3 col-sm-12 mt-2"><a href="https://github.com/resendiz1" target="_blank" class="text-white"><i class="fab fa-github mr-2"></i>GitHub</a></div>
  
      <div class="col-lg-3 col-md-3 col-sm-12 mt-2"><a class="text-white"><i class="fas fa-mail-bulk mr-2"></i>resendiz.galleta@gmail.com</a></div>
   
      <div class="col-lg-3 col-md-3 col-sm-12 mt-2"><a class="text-white" target="_blank" href="https://api.whatsapp.com/send?phone=522491725430"><i class="fab fa-whatsapp mr-2 h5"></i>249-172-54-30</a></div>  

      @guest
      <div class="col-12 text-center mt-2"><a class="text-white" target="_blank" href="{{route('login')}}"><i class="fas fa-key mr-2"></i>Login</a></div>    
      
      
      @else
      <div class="col-12 text-center mt-2"><a class="text-white" target="_blank" href="#" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();" class="text-white"><i class="fas fa-sign-out-alt mr-2"></i>Salir</a></div>   
 
      @endguest
    </div>
  </div>
  
  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>


  <div class="container mt-4 bg-white">



    <div class="row shadow p-3 pt-5 d-flex justify-content-around">
      <div class="col-lg-5 col-md-6  d-flex ">
        @if ($last!= null)
            
       
        <img src="{{Storage::url($last->imagen)}}" class="img-fluid" alt="">
      </div>
      <div class="col-lg-5 col-md-6 col-sm-12">
        <strong>Nombre completo: </strong>{{$last->nombre}}  <br> <br>
        <strong>Titúlo : </strong> {{$last->titulo}} <br> <br>
        <strong>Ubicación: </strong> {{$last->ubicacion}} <br> <br>
        <strong>Lugar de nacimiento: </strong> {{$last->lugar_nacimiento}} <br><br>
        <strong>Estado civil: </strong> {{$last->estado_civil}}<br><br>
        <strong>Objetivo: </strong> {!!$last->objetivo!!}.
  
      </div>

          
      @else
        <div class="col-12 text-center">
          <li class="strong">DEBE REGISTRAR DATOS EN LA BD PAA PODER VISUALIZARLOS AQUI</li>
        </div>
      @endif


    </div>
  </div>
  
  <div class="container bg-white shadow mt-5">
    <div class="row p-1 ">
     <div class="col-12">
      <h2 class="font-weight-bold m-2">Skills</h2>
     </div>


<div class="skills col-lg-12 p-3 text-center">
  @forelse ($skill as $skillItem)
 
  <div class=" shadow text-white  " style="background: {{$skillItem->color}}">
 <h3>{!! $skillItem->icono !!} </h3>    <strong class="text-uppercase">{{$skillItem->nombre}}</strong>
  </div> 
 
@empty
    <li class="m-5 font-weight-bold">No hay nada aqui</li>
@endforelse
</div>



    </div>
  </div>



  <div class="container bg-white mt-5 shadow">
    <div class="row">
      <div class="col-12 p-0">
        <h4 class="font-weight-bold card-header bg-primary text-center text-uppercase text-white">Proyectos</h4>
      </div>
  
  
  <div class="row p-4">

    @forelse ($proyectos as $proyectosItem)

    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
         
      <div class="card front">
      <div class="card-header text-center text-white azulito">{{$proyectosItem->nombre}}</div>
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
      <div class="card-footer text-justify">{!!$proyectosItem->descripcion!!}</div>
      </div>
   
  

</div>
    @empty
       <li class="m-4 font-weight-bold">Nada por aqui</li> 
    @endforelse
  
  
  </div>
  
    </div>

  </div>
  

  <div class="container mt-5 bg-white shadow">
    <div class="row p-4">
      <div class="col-lg-6 col-ms-12 p-5">
        <div class="row d-flex justify-content-center">
          <div class="col-12">
            <h4 class="text-center font-weight-bold">Contáctame por otros medios</h4>
          </div>
          <div class="col-6 p-0 mt-4 text-center">
            <a href="https://www.facebook.com/arturito.resendiz/" target="_blank" >
            <i class="fab fa-facebook fa-3x"></i>
            <h5 class="text-center text-dark">
              Facebook</h5></a>
          </div>
          <div class="col-6 p-0 mt-4 text-center">
            <a class="text-success" target="_blank" href="https://api.whatsapp.com/send?phone=522491725430">
            <i class="fab fa-whatsapp fa-3x"></i>
            <h5 class="text-center text-dark">Whatsapp</h5> </a>
          </div>

          <div class="col-6 p-0 mt-4 text-center">
            <i class="fa fa-phone fa-3x"></i>
            <h5 class="text-center">249-172-54-30</h5>
          </div>

          <div class="col-6 p-0 mt-4 text-center">
            <i class="fa fa-envelope-open-text fa-3x"></i>
            <h5 class="text-center">resendiz.galleta@gmail.com</h5>
          </div>

        </div>
      </div>
        <div class="col-lg-6 col-ms-12 p-3">
        <form class="text-center border border-light p-5" method="POST" action="{{route('mensaje.store')}}">
          @csrf
    
      <p class="h4 mb-4">Formaulario de contacto</p>
    
      <!-- Name -->
      <input type="text" id="defaultContactFormName" name="nombre" class="form-control mb-4" placeholder="Nombre">
    
      <!-- Email -->
      <input type="email" id="defaultContactFormEmail" name="correo" class="form-control mb-4" placeholder="E-mail">
    
      <div class="form-group">
          <textarea class="form-control rounded-0" name="mensaje" id="exampleFormControlTextarea2" rows="3" placeholder="Mensaje"></textarea>
      </div>
    
    
      <!-- Send button -->
      <button class="btn btn-info btn-block" type="submit">Enviar</button>
    
    </form>
    <!-- Default form contact -->
    
    
    
        </div>

      
    </div>
  </div>
  
  <br>
  <br>
  <br>
  <br>

  @endsection