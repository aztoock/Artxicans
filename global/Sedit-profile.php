<?php

    if(isset($_POST['save-data']))
        {
                # Obtenemos los datos que se ingresan en los inputs
            $seler = $_GET['id_seller'];
            $identificador = $_POST['identificador'];
            $lada = $_POST['lada'];
            $telefono = $_POST['numero'];
            $infoseller = $_POST['info-seller'];
            $infoart = $_POST['info-art'];
            $direccion = $_POST['location'];
                # Consulta para buscar si existen datos con ayuda del id_seller (seler)
            $query = "SELECT * FROM sellers_data WHERE ID_registro = $seler";
            $resultado = mysqli_query($conn, $query);
            if ( mysqli_num_rows($resultado) > 0 )  # Si existen datos, se actualizan
                {
                        # Actualizamos los datos obtenidos a la tbl sellers_data
                    $query = (" UPDATE `sellers_data` 
                                SET `description` = '$infoseller', `desc_art` = '$infoart', `location` = '$direccion' 
                                WHERE `sellers_data`.`ID_registro` = $seler"); 
                    $resul = mysqli_query($conn,$query);
                }
            else
                {
                        # Insertamos los datos obtenidos en la tbl
                    $query = (" INSERT INTO `sellers_data` (`id_data`, `description`, `desc_art`, `location`, `ID_registro`) 
                                VALUES (NULL, '$infoseller', '$infoart', '$direccion', '$seler')"); 
                    $resul = mysqli_query($conn,$query);
                }
            echo $seler;
            echo $identificador;
            echo $lada;
            echo $telefono;
            echo $infoseller;
            echo $infoart;
            echo $direccion;
        }

    $seller = $_GET['id_seller'];
    $id_user = $_SESSION['id'];
    if($seller <> $id_user){ # Si alguien quiere cambiar el id del link lo regresara al index.
        echo("<script>location.href = './index.php';</script>");
    }
    # Datos de la tabla reg_sellers 
    $query = mysqli_query($conn,"SELECT * FROM reg_sellers WHERE ID_registro = $seller");
    $data = mysqli_fetch_array($query);
    # Datos de la tablas sellers-data
    $query2 = mysqli_query($conn,"SELECT * FROM sellers_data WHERE ID_registro = $seller");
    $data2 = mysqli_fetch_array($query2);
?>

<section class="edit-profile-seller">
        <h1 align="center">Editar perfil</h1>
    <form  method="POST" class="form-data">
        <div class="seller-data-1" style="margin-top:1.5rem">
            <div class="mb-3 ">
                <div class="marg-1">
                    <div>
                    <label for="identificador" class="form-label">Identificador</label>
                    <input type="text" class="form-control input-size-1" name="identificador" id="numero" value="<?php echo $data['nickname']?>">
                    </div>
                <div>
                <div class="marg-2">
                    <div>
                        <label for="numero" class="form-label">Lada</label>
                        <input type="text" class="form-control input-size-lada" name="lada" id="lada" value="<?php echo $data['lada']?>">
                    </div>
                    <div>
                        <label for="numero" class="form-label">Número de teléfono</label>
                        <input type="text" class="form-control" name="numero" id="numero" value="<?php echo $data['telefono']?>">
                    </div>
                </div>            
            </div>
        </div>
        
        <div class="seller-data-2" style="margin-top:1rem">
            <div class="mb-3">
                <label for="info-seller" class="form-label">Descripción acerca de ti y tu tiempo trabajando.</label>
                <?php 
                    if(empty($data2['description'])){
                ?>
                <textarea class="form-control input-size" name="info-seller" style="resize:none" id="info-seller" rows="3" maxlength="100"></textarea>
                <?php }else{?>
                <textarea class="form-control input-size" name="info-seller" style="resize:none" id="info-seller" rows="3" maxlength="100"><?php echo $data2['description']?></textarea>
                <?php }?>
            </div>
            <div class="mb-3" >
                <label for="info-art" class="form-label">Descripción acerca tus artesanías.</label>
                <?php 
                    if(empty($data2['desc_art'])){
                ?>
                <textarea class="form-control input-size" name="info-art" style="resize:none" id="info-art" rows="3" maxlength="100"></textarea>
                <?php }else{?>
                <textarea class="form-control input-size" name="info-art" style="resize:none" id="info-art" rows="3" maxlength="100"><?php echo $data2['desc_art']?></textarea>
                <?php }?>
            </div>
            <div class="mb-3" >
                <label for="info-art" class="form-label">Descripción sobre tú donde se encuentra tu lugar de trabajo.</label>
                <?php 
                    if(empty($data2['location'])){
                ?>
                <textarea class="form-control input-size" name="location" style="resize:none" id="info-art" placeholder="Puedes añadir dirección, lugar y estado." rows="2" maxlength="50"></textarea>
                <?php }else{?>
                <textarea class="form-control input-size" name="location" style="resize:none" id="info-art" rows="2" maxlength="50"><?php echo $data2['location']?></textarea>
                <?php }?>
            </div>
        </div>
        <div class="btn-save">
            <button type="submit"  class="btn btn-info" name="save-data" value="<?php echo $seller;?>">Aceptar</button>
        <div>
    </form>
</section>