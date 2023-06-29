<?php
    $id_user =  $_SESSION['id'];
    if(isset($_POST['send-reg'])){
        # Se obtienen los datos del form 
    $nombre = $_POST['nombre'];         # 
    $apellidos = $_POST['apellidos'];   # 
    $nickname = $_POST['nickname'];     # 
    $lada = $_POST['lada'];             #
    $telefono = $_POST['telefono'];     # Variables para obtener los datos de los imput
    $telefono2 = $_POST['telefono2'];   # 
    $domicilio = $_POST['domicilio'];   # 
    $postal = $_POST['postal'];         # 

        # Se obtienen la info de la imagen
    $direccion = "./user/files";
    $file_name = $_FILES['file']['name'];      #
    $file_tmp = $_FILES['file']['tmp_name'];   # Variables para obtener los datos del archivo a subir
    $name_imagen = $nickname."-identificacion".".jpeg";
    $ruta = $direccion.$name_imagen;                # Variable para establecer la ruta del archivo
        
    
        # verificar que un nickname no exista
    $nameabuscar = $nickname;
    $sqlbuscar = "SELECT * FROM `reg_sellers` WHERE nickname = '$nameabuscar'" ;
    $resultado = mysqli_query($conn,$sqlbuscar);

        # Verificar longitud de lada
    $ladastr = strval($lada);
    $cont = strlen($ladastr);

    if (!empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['nickname']) && !empty($_POST['lada']) && !empty($_POST['telefono']) && !empty($_POST['telefono2']) && !empty($_POST['domicilio']) && !empty($_POST['postal']) )
        {
            if ( move_uploaded_file($file_tmp,$ruta) )
                {
                    if (strlen($nombre) < 4)
                        {
                            ?>
                            <div class="alert alert-danger">*Nombre muy corto</div>
                           
                            <?php    
                    }
                    elseif ($resultado->num_rows > 0)
                        {
                            ?> 
                            <div class="alert alert-danger">*El nickname esta en uso</div>
                           <?php 
                        }
                    elseif ($cont < 2 or $cont >= 4)
                        {

                            ?> 
                            <div class="alert alert-danger">*Lada incorrecta</div>
                           <?php 
                        }
                    elseif (strlen($telefono) < 7 or strlen($telefono) > 10)
                        {
                            ?>
                            <div class="alert alert-danger">*Numero de telefono incorrecto</div>
                           
                            <?php 
                        }
                    elseif (strlen($telefono2) < 7 or strlen($telefono2) > 10)
                        {
                            ?>
                            <div class="alert alert-danger">*Numero de telefono incorrecto2</div>
                           <?php 
                           
                        }
                    elseif (strlen($postal) < 4 or strlen($postal) >= 10)
                        {
                            ?>
                            <div class="alert alert-danger">*Codigo postal incorrecto</div>
                           <?php 
                           
                        }
                    else
                        {
                            $sql = (" INSERT INTO reg_sellers VALUES(NULL,'$nombre','$apellidos','$nickname','$lada','$telefono','$telefono2','$domicilio','$postal','$name_imagen','Pendiente','$id_user')");
                            $result = mysqli_query($conn,$sql);
                            if ($result)
                                {
                                    echo("<script>location.href = 'profile.php';</script>");
                                }
                        }
                }
            else
                {
                    ?>
                    <div class="alert alert-danger" role="alert">*Error al cargar la identificacion</div>
                           
                    <?php 
                }
        }
    else
        {
            ?>
            <div class="alert alert-danger">*Campos vacios</div>
                           
            <?php 
        }

    }
?>