<?php
include('./global/conexion.php');
include('./templates/cabecera.php');
if(@!$_SESSION['user']){
    echo("<script>location.href = 'login.php';</script>");
}
include('./global/Smydata.php');
?>


<?php 
include('./templates/pie.php');
?>