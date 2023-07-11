<?php
    if(isset($_POST['send-reg']))
        {
                # Se obtienen los datos del form
            $idusuario =  $_SESSION['user'];            # variable de PRUEBA
            $edireccion = $_POST['edireccion'];         # variable para obtener el estado de direccion
            $userid = $_POST['id'];                     # variable para obtener el id de session
            $nombre = $_POST['nombre'];                 # 
            $direccion1 = $_POST['direccion1'];         # 
            $direccion2 = $_POST['direccion2'];         # 
            $ciudad = $_POST['ciudad'];                 #
            $estado = $_POST['estado'];  
            $pais = $_POST['pais'];               # Variables para obtener los datos de los imput
            $cp = $_POST['cp'];                         # 
            $telefono = $_POST['telefono'];             # 
            $instrucciones = $_POST['instrucciones'];   #

            if (!empty($_POST['nombre']) && !empty($_POST['direccion1'])  && !empty($_POST['ciudad']) && !empty($_POST['estado']) && !empty($_POST['cp']) && !empty($_POST['telefono']) && !empty($_POST['instrucciones']) )
                {
                    if (strlen($nombre) < 4)
                        {
?>
                            <div class="alert alert-danger">*Nombre muy corto</div>
<?php    
                        }
                    elseif (strlen($telefono) < 7 or strlen($telefono) > 10)
                        {
?>
                            <div class="alert alert-danger">*Numero de telefono incorrecto</div>
<?php 
                        }
                    elseif (strlen($cp) < 4 or strlen($cp) >= 10)
                        {
?>
                            <div class="alert alert-danger">*Codigo postal incorrecto</div>
<?php 
                        }
                    else
                        {
                            $sql = (" INSERT INTO direcciones (`id_direccion`, `usuario_id`, `nombre`, `direccion1`, `direccion2`, `ciudad`, `estado`,`pais`, `codigopostal`, `telefono`, `instrucciones`) 
                            VALUES (NULL, '$userid', '$nombre', '$direccion1', '$direccion2', '$ciudad', '$estado', '$pais','$cp', '$telefono', '$instrucciones' )");
                            $result = mysqli_query($conn,$sql);
                            if ($result)
                                {
                                        # query para actualizar el destado de direccin el tbl registro
                                    $sqlupdate = "UPDATE registro SET direccion = '$edireccion' WHERE ID = '$userid' ";
                                    $result = mysqli_query($conn,$sqlupdate);
                                    if ($result)
                                        {
                                            #echo print($userid."_".$edireccion); mensaje de prueba
                                            echo("<script>location.href = './profile.php';</script>");
                                        }
                                }
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