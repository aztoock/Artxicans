<?php 
    include('../global/conexion.php');
    session_start();

    if(isset($_POST['send-comment'])){
        $id_user = $_SESSION['id'];
        $id_product = $_GET['id_p'];
        $stars = $_POST['estrellas'];
        $comment = $_POST['comment'];

        mysqli_query($conn,"INSERT INTO stars VALUES(NULL,'$stars','$comment','$id_user','$id_product')");
        echo("<script>location.href = '../product.php?id_product=".$id_product."';</script>");
    }

?>