/* Loader */
/* Referencia del loader */
const loadmore = document.getElementById('load-more');
const loader = document.getElementById('loader');
/* Al incio lo ocultamos */
loader.style.display = 'none';
/*    loadmore.style.display = 'block';  */
/* Loader */

$(document).ready(function(){

/* Funcion de evento click del boton ver mas */
  $(document).on('click', '#load-more', function(e){
    /* Cancelamos el evento por defecto */
    e.preventDefault();
    
/* Loader */
/* Mostramos al loader */
  loader.style.display = 'block';
  /* Ocultamos el boton "Ver mas" */
  loadmore.style.display = 'none'
  /* Hacemos que nuestro loader se tome 3 segundos para ejecutar nuestra codigo AJAX, oculte loader y muestre el boton nuevamente*/
  setTimeout(() => {
  loader.style.display = 'none';  
  loadmore.style.display = 'block'
/* Loader */
    var id_product =$('#load-more').data('id');
    
    /* Codigo ajax para realizar otra peticion al servidor de obtener mas registros, haciendo referencia a nuestro 
    archivo load.php para mostrar los datos. Esta peticion y muestra de registros no recargara la pagina . */
    $.ajax({
      url:"load.php",
      type:"post",
      data:{id_product:id_product},
      success:function(response){
        $('#id-load').remove();
        $('#mainContent').append(response);

      }
    })

  },3000);

  });
});