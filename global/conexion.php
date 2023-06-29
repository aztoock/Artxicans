<?php
    define("KEY","aRtXiCaNs");
    define("COD","AES-128-ECB");
    define("SERVIDOR","localhost");
    define("USUARIO","root");
    define("PASSWORD","");
    define("BD","artxicans");

    try{
        $conn = mysqli_connect(SERVIDOR,USUARIO,PASSWORD,BD);
    }catch(PDOException $e){
        echo "<script>alert('Error...')</script>";
    }
?>