<?php 
    include('./global/conexion.php');
    include('./templates/cabecera.php');
    if(@!$_SESSION['user']){
       echo("<script>location.href = './index.php';</script>");
    }
    include('./global/Sedit-profile.php');
?>
<?php 
    include('./templates/pie.php');
?>