<?php
    $idusuario =  $_SESSION['id'];
    $men = "";
    $estado = "";
    if ( $_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['guardar']) )
        {
            if ( isset($_POST['tokenguardar']) )
                {
                    $token1 = $_POST['tokenguardar'];
                    $query = (" INSERT INTO `pay_account` (`id_account`, `token`, `ID_registro`) 
                                VALUES (NULL, '$token1', '$idusuario');");
                    $result = mysqli_query($conn,$query);
                    $men = "*Token Guardado";
                }
            else
                {
                    $token2 = $_POST['tokenactualizar'];
                    $query = (" UPDATE `pay_account` 
                                SET `token` = '$token2'
                                WHERE `pay_account`.`ID_registro` = '$idusuario';");
                    $result = mysqli_query($conn,$query);
                    $men = "*Token actualizado";
                }
        }
    
?>
<section class="payaccount">
    <h2>Mi cuenta de pago</h2>
    <h5>Ingresa tu Token de pago PayPal, para que puedas recibir los pagos de tus pedidos, ingresar este dato es requisito para poder subir tus productos.</h5>
    <form class="form-account" method="post">
    <?php 
        # Consulta para saber si el usuario ya cuenta con un token
        $query = mysqli_query($conn,"SELECT * FROM pay_account WHERE ID_registro = $idusuario");
        $data = mysqli_fetch_array($query);
        if($query->num_rows > 0)
            {
                $estado = "Actualizar";
        ?>
                <div class="mb-3">
                    <label class="form-label text-center"><h3>Tu Token de PayPal: <?php echo $data['token']?></h3> </label>
            </br>
                    <label for="token" class="form-label text-center">Si deceas actualizar tu token ingresa el nuevo en el siguiente campo</label>
                    <input type="text" class="form-control" id="tokenactualizar" name="tokenactualizar" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Para saber cual es tu Token de pago, observa este tutorial: .</div>
                </div>
        <?php
            }
        else
            {
                $estado = "Guardar";
        ?>
                <div class="mb-3">
                    <label for="token" class="form-label">Ingresa tu Token de PayPal</label>
                    <input type="text" class="form-control" id="tokenguardar" name="tokenguardar" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Para saber cual es tu Token de pago, observa este tutorial: .</div>
                </div>
        <?php
            }
        ?>
        <div class="btns-save">
            <a class="btn btn-secondary" href='./seller.php'>Regresar</a>
            <button type="submit" name = "guardar" id="guardar" class="btn btn-success"><?php echo $estado ?></button>
        </div>
    </form>

    <!-- <div class="alert alert-danger"><?php echo $men; ?></div> -->
</section>
