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
    
    <a href="{{route('skills')}}" class="m-2 btn btn-dark btn-sm">
      <i class="fa fa-cogs fa-2x"></i>
    </a>


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
  <script>
$(function () {
$('[data-toggle="tooltip"]').tooltip()
})


        $(document).ready( function () {
          $('#tablas').DataTable();
        } );

        $(document).ready( function () {
          $('#tabla').DataTable();
        } );



$(document).ready( function () {
    $('#text-area').richText();
    
} );

$(document).ready( function () {
    $('#textarea').richText();
    
} );





$('.skills').slick({
  slidesToShow: 3,
  slidesToScroll: 3,
  autoplay: true,
  autoplaySpeed: 2000,
  dots: true
});







var filtered = false;

$('.js-filter').on('click', function(){
  if (filtered === false) {
    $('.filtering').slick('slickFilter',':even');
    $(this).text('Unfilter Slides');
    filtered = true;
  } else {
    $('.filtering').slick('slickUnfilter');
    $(this).text('Filter Slides');
    filtered = false;
  }
});




$(document).ready(function(){
	$("#icono").change(function(){
		var texto_escrito = $(this).val();
		$("#area").html(texto_escrito);
	})
})


</script>


</body>
</html>
