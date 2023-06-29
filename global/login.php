<?php
    if (isset($_REQUEST['login']))
        {
            $email = $_REQUEST['email']??'';        # variables obtencion de email del input html
            $password = $_REQUEST['pass']??'';  # variables obtencion de password del input html
            #$con = mysqli_connect(SERVIDOR,USUARIO,PASSWORD,BD);  # se inicializa la conexion
            $sql = "SELECT * FROM registro WHERE Correo='".$email."' and Contraseña='".$password."' "; # query para obtener la busqueda de los campos
            $result = mysqli_query($conn,$sql);   # se obtiene el resultado de la query
            if ($result->num_rows > 0)  # se obtiene el valor de $result
                {
                    /* header('Location: index.php'); */
                    echo("<script>location.href = 'index.php';</script>");
                    $row = mysqli_fetch_assoc($result);    # registro de la peticion
                    $_SESSION['id']=$row['ID'];   # se almacena la sesion en un array
                    $_SESSION['user'] = $row['Nombre'];
                    #echo "<script>alert('login correcto...')</script>";   # se muestra un scrpt de alerta
                }
            else
                {
                    ?>
                        <div class="alert alert-danger" role="alert" > Contraseña/Correo incorrecto</div>
                    <?php
                }
            /* mysqli_free_result($result); */  #se libera la cola de resultados
            /* mysqli_close($conn);  */ #se cierra la conexcion para que no jale recursos
        }
?>