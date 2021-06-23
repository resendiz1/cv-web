// La inicializacion del puto tooltip de bootstrap
$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})
// La inicializacion del puto tooltip de bootstrap

//La inicializacion del DATATABLES    
$(document).ready( function () {
  $('#tablas').DataTable();
} );
    
$(document).ready( function () {
  $('#tabla').DataTable();
} );
//La inicializacion del DATATABLES



//La inicializacion del RICHTEXT   
$(document).ready( function () {
   $('#text-area').richText();        
});
    
$(document).ready( function () {
   $('#textarea').richText();
});
//La inicializacion del RICHTEXT   
    
    
    
//El carousel que quite (lo podria usar para el carousel de los proyectos)xd    
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
    
    
    
    //Esta madre me ayuda a la previsualizacion del icono que tengo en el de agregar iconos
    $(document).ready(function(){
        $("#icono").change(function(){
            var texto_escrito = $(this).val();
            $("#area").html(texto_escrito);
        })
    })
    

const previa = (inputImg, imgTag, divPreview) => {
    const  imagen = document.getElementById(inputImg),
           imagen_tag = document.getElementById(imgTag),
           preview = document.getElementById(divPreview);

    if(imagen && imagen_tag && preview){
        {
            imagen.addEventListener('change', function(e){
    
                    // Creamos el objeto de la clase FileReader
                    let reader = new FileReader();
                    // Leemos el archivo subido y se lo pasamos a nuestro fileReader
                    reader.readAsDataURL(e.target.files[0]);
                    // Le decimos que cuando este listo ejecute el código interno
                    reader.onload = function(){
                    imagen_tag.src = reader.result;
    
                    preview.innerHTML = '';
                    preview.append(imagen_tag);
                };
            })   
        }   
    }
}

const numeroInputs = document.getElementsByClassName('contador');

    for(i=0 ; i<numeroInputs.length; i++){
        const imagen_perfil = 'imagen_perfil'+i,
              img_tag       = 'img_tag'+i,
              preview       =  'preview'+i;  

              alert(imagen_perfil + img_tag + preview)
        previa(imagen_perfil, img_tag, preview)
              
    }


