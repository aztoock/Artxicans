<?php 
    include('../global/conexion.php');
    session_start();
    /* error_reporting(0);*/
    if(@!$_SESSION['user']){
        echo("<script>location.href = '../sell.php';</script>");
    } else{
        $id_user = $_SESSION['id'];
        $query = mysqli_query($conn,"SELECT * FROM registro WHERE ID = '$id_user'");
        $res = mysqli_fetch_array($query);
                  
        if($res['estatus'] == '1'){
            $_SESSION['roll'] = $res['estatus'];
            echo("<script>location.href = '../seller.php';</script>");
        }else{
            echo("<script>location.href = '../sell.php';</script>");
        }     
    }
?>