<?php 
    include('./global/conexion.php');
    include('./templates/cabecera.php');
    include('./helpers/loader.php');
    if(@!$_SESSION['roll']){
        echo("<script>location.href = './index.php';</script>");
    } 
    include('./global/Spay-account.php');
?>

<?php 
    include('./templates/pie.php');
?>