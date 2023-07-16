<?php 
    include('../global/conexion.php');
    session_start();
    if(@!$_SESSION['user']){
        echo("<script>location.href = '../index.php';</script>");
    } 
    $id_user = $_SESSION['id'];
    $seller = $_GET['seller'];
    $id_report = $_GET['id_r'];
    
    mysqli_query($conn,"INSERT INTO reports VALUES(NULL,'Reporte comentario en perfil','Comentario Perfil','$id_user',NULL,NULL,'$id_report',NULL,NULL,0)");
    echo("<script>location.href = '../profile-seller.php?seller_data=".$seller."';</script>");
?>