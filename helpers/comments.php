<?php 
    include('../global/conexion.php');
    session_start();
    # Cuando se presiona el boton para mandar los datos, hacemos lo que hay dentro del if
    if(isset($_POST['send-comment'])){
        
        $seller = $_GET['id_seller']; # Id del vendedor
        $id_user = $_SESSION['id']; # Id del usuario
        $stars = $_POST['estrellas']; # Estrellas que ingreso
        $comment = $_POST['comment']; # Comentario
        
        # Insertamos los datos en la tabla profile_comments
        mysqli_query($conn,"INSERT INTO profile_comments VALUES(NULL,'$stars','$comment','$seller','$id_user')");
        echo("<script>location.href = '../profile-seller.php?seller_data=".$seller."';</script>");
    
    }

?>