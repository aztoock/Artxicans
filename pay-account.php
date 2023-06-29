<?php 
    include('./global/conexion.php');
    include('./templates/cabecera.php');
    if(@!$_SESSION['roll']){
        echo("<script>location.href = './index.php';</script>");
    } 
    $id_user = $_SESSION['id'];
?>

    <section class="payaccount">
        <h2>Mi cuenta de pago</h2>
        <h5>Ingresa tu Token de pago PayPal, para que puedas recibir los pagos de tus pedidos, ingresar este dato es requisito para poder subir tus productos.</h5>
        <form class="form-account">
            <?php 
                # Consulta para saber si el usuario ya cuenta con un token
                $query = mysqli_query($conn,"SELECT * FROM pay_account WHERE ID_registro = $id_user");
                $data = mysqli_fetch_array($query);
                if($query->num_rows > 0){
            ?>
            <div class="mb-3">
                <label for="token" class="form-label">Tu Token de PayPal</label>
                <input type="text" class="form-control" id="token" name="token" aria-describedby="emailHelp" value="<?php echo $data['token']?>">
            <div id="emailHelp" class="form-text">Para saber cual es tu Token de pago, observa este tutorial: .</div>
            </div>

            <?php }else{?>
            <div class="mb-3">
                <label for="token" class="form-label">Ingresa tu Token de PayPal</label>
                <input type="text" class="form-control" id="token" name="token" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Para saber cual es tu Token de pago, observa este tutorial: .</div>
            </div>
            <?php }?>
   <div class="btns-save">
  <a class="btn btn-secondary" href='./seller.php'>Regresar</a>
  <button type="submit" class="btn btn-success">Guardar</button>
    <div>
</form>
    
    </section>

<?php 
    include('./templates/pie.php');
?>