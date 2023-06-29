/* Loader */
const loadmore = document.getElementById('load-more');
const loader = document.getElementById('loader');
loader.style.display = 'none';
/*    loadmore.style.display = 'block';  */
/* Loader */
$(document).ready(function(){


  $(document).on('click', '#load-more', function(event){
    event.preventDefault();
    
/* Loader */
  loader.style.display = 'block';
  loadmore.style.display = 'none'
  setTimeout(() => {
  loader.style.display = 'none';  
  loadmore.style.display = 'block'
/* Loader */
    var id_product =$('#load-more').data('id');
    
    
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