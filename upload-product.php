<?php 
    include('./global/conexion.php');
    include('./templates/cabecera.php');
    include('./helpers/loader.php');
    if(@!$_SESSION['roll']){
        echo("<script>location.href = './index.php';</script>");
      } 
?>
    <h2 align="center">Agregar producto</h2>
    

<?php 
    include('./templates/pie.php');
?>