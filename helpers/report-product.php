<?php 
    include('../global/conexion.php');
    session_start();
    if(@!$_SESSION['user']){
        echo("<script>location.href = '../index.php';</script>");
    } 
    $id_user = $_SESSION['id'];
    $product = $_GET['id_p'];
    $answer = $_POST['answer'];
    $seller = $_POST['seller'];
    # Insertamos los datos de reporte de producto
    # Los campos que esten en NULL significa que no es necesario ser llenados ya que no se cuenta con algun valor.
    mysqli_query($conn,"INSERT INTO `reports` (`id_report`, `report`, `type`, `ID_registro`, `id_product`, `id_star`, `id_comment`, `seller`, `buyer`, `estatus`) 
                        VALUES (NULL, '$answer', 'Producto', '$id_user', '$product', NULL, NULL, '$seller', NULL, 0)");
    echo("<script>location.href = '../product.php?id_product=".$product."';</script>");


?>