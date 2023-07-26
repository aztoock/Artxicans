<?php 
    include('./global/conexion.php');
    include('./templates/cabecera.php');
    include('./helpers/loader.php');
    if(!@$_SESSION['user'])
        { 
            echo("<script>location.href = '../index.php';</script>");  
        }
        include('./global/Ssingle-order.php');
?>
    
<?php 
    include('./templates/pie.php');
?>