<?php
    $id_user = $_SESSION['id'];
    if ( isset($_POST['updatepassword']) )
        {
                # Obtenemos las contraseñas de los input's
            $oldpass = $_POST['oldpassword'];
            $newpass = $_POST['newpassword'];
            $repeatpass = $_POST['repeatpassword'];
                # Buscamos la antigua contraseña almacenada
            $sql = mysqli_query($conn,"SELECT Contraseña FROM registro WHERE ID = '$id_user'");
            $res = mysqli_fetch_array($sql);
                # Verificamos que la contraseña antigua coincida para proceder al cambio de contraseña
            if ( $oldpass == $res['Contraseña'] )
                {
                        # Se verifica que las nuevas contraseñas coincidan
                    if ( $newpass == $repeatpass )
                        {
                                # Actualizamos los datos a la nueva contraseña
                            $updatepass = " UPDATE `registro` 
                                            SET `Contraseña` = '$newpass' 
                                            WHERE `registro`.`ID` = $id_user";
                            mysqli_query($conn, $updatepass);
                        }
                    else
                        {
                            echo "La nueva contraseña no coincide";
                        }
                }
            else
                {
                    echo "Contraseña antigua incorrecta";
                }
            
        }
    else if ( isset($_POST['updatedata']) )
        {
            $dire1 = $_POST['direccion1'];
            $dire2 = $_POST['direccion2'];
            $tel = $_POST['telefono'];
            $instruc = $_POST['instrucciones'];
                # Verificamos que la direccion 1 no este vacia
            if ( empty($dire1) )
                {
                    echo "La direccion principal no puede quedar vacia.";
                }
            else 
                {
                        # Verificamos que el telefono no este vacio y ademas que sea igual a 10 digitos
                    if ( !empty($tel) && strlen($tel) == 10 )
                        {
                            if ( !empty($instruc) )
                                {
                                    $update = " UPDATE `direcciones` 
                                                SET `direccion1` = '$dire1', `direccion2` = '$dire2', `telefono` = '$tel', `instrucciones` = '$instruc' 
                                                WHERE `direcciones`.`usuario_id` = $id_user";
                                    mysqli_query($conn,$update);
                                }
                            else
                                {
                                    echo "Las instrucciones no pueden quedar vacias.";
                                }
                        }
                    else
                        {
                            echo "datos de telefono incorrectos";
                        }
                }
        }
?>

<section class="mydata">
    <h1 align="center">Mis datos</h1>
    <br>
    
    <form class="my-data mt-4" method="post" >
        <h2 align="center">Contraseña</h2>
        <br>
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña anterior</label>
            <input type="password" class="form-control input-width" name="oldpassword">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Nueva contraseña</label>
            <input type="password" class="form-control input-width" name="newpassword">
        </div> 
        <div class="mb-3">
            <label for="password" class="form-label">Verifica la contraseña</label>
            <input type="password" class="form-control input-width" name="repeatpassword">
        </div>
            <!-- Boton para mandar datos -->
        <div class="mt-3 buttons-data">
            <button type="submit" name="updatepassword" class="btn btn-info">Actualizar</button>
        </div>
    </form>
    <br>
    <br>
<?php
    $sql = mysqli_query($conn,"SELECT * FROM registro WHERE ID = '$id_user'");
    $res = mysqli_fetch_array($sql);
    
    if($res['direccion'] == 1){
?>
    <form class="my-data mt-4" method="post" >
        <h2 align="center">Datos de direccion y telefono</h2>
        <br>
<?php 
        $query2 = mysqli_query($conn,"SELECT * FROM direcciones WHERE usuario_id = '$id_user'");
        $data2 = mysqli_fetch_array($query2);
?>
        <div class="mb-3">
            <label for="direccion1" class="form-label">Direccion 1:</label>
            <input type="text" class="form-control input-width" id="direccion1" name="direccion1" value="<?php echo $data2['direccion1']?>" >
        </div> 
        
        <div class="mb-3">
            <label for="direccion2" class="form-label">Direccion 2:</label>
            <input type="text" class="form-control input-width" id="direccion2" name="direccion2" value="<?php echo $data2['direccion2']?>" >
        </div>
        <div class="mb-3">
            <label for="telefono" class="form-label">Numero de telefono:</label>
            <div class="telefonos">
            <input type="text" class="form-control input-medium" id="telefono" name="telefono" value="<?php echo $data2['telefono']?>" >
            </div>
        </div> 
        <div class="mb-3">
            <label for="instrucciones" class="form-label">Instrucciones de domicilio:</label>
            <input type="text" class="form-control input-width" id="instrucciones" name="instrucciones" value="<?php echo $data2['instrucciones']?>" >
        </div> 

            <!-- Boton para mandar datos -->
        <div class="mt-3 buttons-data">
            <a class="btn btn-secondary" href='./profile.php'>Regresar</a>
            <button type="submit" name="updatedata" class="btn btn-info">Actualizar</button>
        </div>
    </form>
<?php }
    else 
        {
?>
        <h2 align="center">Sin datos de direccion</h2>
        <div class="mt-3 buttons-data">
            <a class="btn btn-secondary" href='./profile.php'>Regresar</a>
        </div>
<?php
        }
?>  
</section>