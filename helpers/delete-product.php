<?php 
    include('../global/conexion.php');
    session_start();
    if(@!$_SESSION['roll']){
        echo("<script>location.href = '../index.php';</script>");
      } 
          
      $id_product = $_GET['id'];
      # Eliminamos el producto que coincida con el id que se esta solicitando eliminar
      mysqli_query($conn,"DELETE FROM products WHERE id_product = '$id_product'");
      # De igual forma eliminamos todos los comentarios que contenga el producto.
      mysqli_query($conn,"DELETE FROM stars WHERE id_product = $id_product"); 
      echo("<script>location.href = '../productList.php';</script>");  
      
?> 