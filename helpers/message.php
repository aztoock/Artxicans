<?php 
    include('../global/conexion.php');
    session_start();
    $seller = base64_decode($_GET['seller_data']);
    if($_POST['sendMessage']){
        $id_user = $_SESSION['id']; 
        $message = $_POST['message'];
        if($seller == $id_user){
            mysqli_query($conn,"INSERT INTO chats VALUES(NULL,'$message','$seller','$id_user','Seller')");
            
        }else{
            mysqli_query($conn,"INSERT INTO chats VALUES(NULL,'$message','$seller','$id_user','User')"); 
            echo("<script>location.href = '../toChat.php?seller_data=".base64_encode($seller)."';</script>");         
        }
    }
?>