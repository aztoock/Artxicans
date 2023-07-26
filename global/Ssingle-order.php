<?php
    $id_user = $_SESSION['id'];
    /* Obtenemos nuestra variable de pedido */
    $venta = base64_decode($_GET['venta']);

    if ( isset($_POST['send-cd']) )
        {
            $oplist = $_POST['listbox'];
            echo $oplist;
        }
?>

<section class="single-order">
    <h1 align="center">Detalles del pedido</h1>
    <center style="margin-top:1.5rem">
        
    </center>

    <center style="margin-top:1.2rem">
        <form method="POST">
            <label for="selectestatus">Selecciona el estatus en el que se encuentra tu envio.</label>
            <select class="form-select w-50" aria-label="Default select example" name="listbox">
                <!-- Aqui pones el valor en el que se encuentra el pedido -->
<?php 
                $get_status = mysqli_query($conn,"SELECT * FROM ventas WHERE id_venta = $venta");
                $set_status = mysqli_fetch_array($get_status);
?>
                <option selected style="background:#6669c5;color: white;"value="<?php echo $set_status['envio']?>"><?php echo $set_status['envio']?></option>
                <option value="Pendiente">Pendiente</option>
                <option value="Enviado">Enviado</option>
                <option value="Entregado">Entregado</option>
            </select>
            <div class="mb-3 w-50 mt-2">
                <label for="cd-rastreo" class="form-label">Ingresa el codigo de rastreo del pedido</label>
                <input type="text" class="form-control" name="cd-rastreo" id="cd-rastreo" >
                <small>Este codigo se enviara al cliente para que pueda rastrear su pedido</small>
            </div>

            <article class="order-data">
                <h2 >Detalles del pedido</h2>
<?php 
                /* Consulta para obtener todos los datos de la venta, para poder tener datos de detalle venta y de esto tener datos de los productos 
                En el "WHERE" se hace referencia a que solo queremos las ventas que se hicieron de un usuario no de todos
                Y anadiendo el AND para poder ver los productos de la venta pero que son productos del vendedor que esta viendo esto */
                $query = mysqli_query($conn,"SELECT * FROM ventas INNER JOIN detalleventa ON
                ventas.id_venta = detalleventa.id_venta INNER JOIN products ON
                detalleventa.id_producto = products.id_product
                WHERE ventas.id_venta = '$venta' AND products.ID_registro = '$id_user'");
                while( $data = mysqli_fetch_array($query))
                    {
?>
                        <div class="order-number">
                            <p><strong>Producto:</strong>&nbsp;<?php echo $data['product']?></p>
                            <p><strong>Cantidad:</strong>&nbsp;<?php echo $data['cantidad']?></p>
                            <p><strong>Fecha de Compra:</strong>&nbsp;<?php echo $data['fecha']?></p>
                            <p><strong>Total de Pago:</strong>&nbsp;<?php echo $data['total']?></p>
                        </div>
<?php 
                    }
?>        
            </article> 
                
<?php 
            /* Consulta para obtener todos los datos de la venta, para poder tener datos de detalle venta y de esto tener datos de los productos 
            En el "WHERE" se hace referencia a que solo queremos las ventas que se hicieron de un usuario no de todos
            Y anadiendo el AND para poder ver los productos de la venta pero que son productos del vendedor que esta viendo esto */
            $get_buyer = mysqli_query($conn,"SELECT * FROM ventas INNER JOIN detalleventa ON
            ventas.id_venta = detalleventa.id_venta INNER JOIN products ON
            detalleventa.id_producto = products.id_product WHERE ventas.id_venta = '$venta' AND products.ID_registro = '$id_user'");
            $set_buyer = mysqli_fetch_array($get_buyer);
            # La consulta que se hizo, solo era para obtener quien compro esos productos
            # Obtenemos el comprador
            $buyer = $set_buyer['ID_registro'];  
            # Obtenemos los datos del comprador
            $get_address = mysqli_query($conn,"SELECT * FROM direcciones INNER JOIN registro 
            ON direcciones.usuario_id = registro.ID 
            WHERE direcciones.usuario_id = '$buyer'");
            $set_address = mysqli_fetch_array($get_address); 
?>
            <article class="order-data">
                <h2>Detalles del comprador</h2>
                <p><strong>Nombre:</strong>&nbsp;<?php echo  $set_address['nombre']?></p>
                <p><strong>Correo:</strong><?php echo $set_address['Correo']?></p>
                <p><strong>Direccion:</strong>&nbsp;<?php echo $set_address['direccion1']?></p>
<?php           if(!empty($set_address['direccion2']))
                    {
?>
                        <p><strong>Direccion:</strong>&nbsp;<?php echo $set_address['direccion2']?></p>
<?php       
                    }
?>
                <p><strong>Ciudad:</strong>&nbsp;<?php echo $set_address['ciudad']?></p>
                <p><strong>Estado:</strong>&nbsp;<?php echo $set_address['estado']?></p>
                <p><strong>Codigo Postal:</strong>&nbsp;<?php echo $set_address['codigopostal']?></p>
                <p><strong>Telefono:</strong>&nbsp;<?php echo $set_address['telefono']?></p>
                <p><strong>Instrucciones:</strong>&nbsp;<?php echo $set_address['instrucciones']?></p> 
            </article>

            <button class="btn btn-secondary" onclick="location.href='./my-orders.php'">Regresar</button>
            <input type="submit" name="send-cd" id="send-cd" class="btn btn-info" value="Guardar">
        </form>
    </center>
</section>

