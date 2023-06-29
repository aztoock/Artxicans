<?php
    if(@!$_SESSION['user']){
        $mensaje = "vender";
    } else{
        $id_user = $_SESSION['id'];
        $query = mysqli_query($conn,"SELECT * FROM registro WHERE ID = '$id_user'");
        $res = mysqli_fetch_array($query);
        if($res['estatus'] == '1'){
            $mensaje = "vendedor";
        }else{
            $mensaje = "vender";
        }     
    }
?>