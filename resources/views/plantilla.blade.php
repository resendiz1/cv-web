<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>CV -Resendiz</title>
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/mdb.min.css')}}">
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<link rel="stylesheet" href="{{asset('css/richtext.min.css')}}">
<link rel="stylesheet" href="{{asset('css/datatables.min.css')}}">
<link rel="stylesheet" href="{{asset('css/estilos.css')}}">
<link rel="stylesheet" href="{{asset('slick/slick.css')}}">
<link rel="stylesheet" href="{{asset('slick/slick-theme.css')}}">

</head>
<body>
  <div class="container">
    <div class="row d-flex flex-column  pl-3 font-weight-bold justify-content-around flotante2"> 
      <a href="{{route('inicio')}}" class="m-2 btn btn-dark btn-sm">
        <i class="fas fa-home fa-2x"></i>
      </a>
      @auth
      <form action="{{route('salir')}}" method="POST">
        @csrf
        <a href="#" class="btn btn-danger" tooltip="Salir" onclick="this.closest('form').submit()">
          <i class="fa fa-door-open fa-2x"></i>
        </a>
      </form>
      @endauth
      
    </div>
  </div>


  
    @yield('contenido')




<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.richtext.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/datatables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('slick/slick.js')}}"></script>
<script type="text/javascript" src="{{asset('js/main.js')}}"></script>

</body>
</html>
