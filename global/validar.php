<?php
    include('../global/conexion.php');
    session_start();
    if(@!$_SESSION['user']){
       
       /*  echo("<script> location.href = '../sell.php';</script>"); */
        
    }else{
        echo("<script>location.href = 'reg-form.php';</script>");
    }

?>