<?php 
    $seller = $_GET['id_seller'];
    $id_user = $_SESSION['id'];
     if($seller <> $id_user){ # Si alguien quiere cambiar el id del link lo regresara al index.
        echo("<script>location.href = './index.php';</script>");
    }
    
    # Obtener datos
    /*  
    No olvides hacer la condicion que si el usuario ya cuenta con informacion en la tabla de sellers_data 
    se haga UPDATE con mysql, si ya notiene datos, hacer el INSERT, al igual una vez que se le de el boton en guardar, se regrese 
    a la pagina de perfil de vendedor, pero con el perfil. lo pasas como profile-seller.php?seller-data=?>
    */

?>