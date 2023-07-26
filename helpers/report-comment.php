<?php 
    include('../global/conexion.php');
    session_start();
    if(@!$_SESSION['user']){
        echo("<script>location.href = '../index.php';</script>");
    } 
    $id_user = $_SESSION['id'];
    
    $id_report = $_GET['id_r'];
    $id_product = $_GET['id_product'];
    # Este es un reporte de comentario en la parte del perfil del vendedor.
    # Los campos que no sean necesarios de la tabla, los dejamos en NULL.
    mysqli_query($conn,"INSERT INTO reports VALUES(NULL,'','Comentario','$id_user','$id_product','$id_report',NULL,NULL)");
    echo("<script>location.href = '../product.php?id_product=".$id_product."';</script>");
?>