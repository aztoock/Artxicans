<?php
    $mensaje = "";
    $id_user = $_SESSION['id'];
    /* Obtenemos nuestra variable de pedido */
    $venta = base64_decode($_GET['venta']);

    if ( isset($_POST['send-cd']) )
        {
                # Obtenemos el valor del listbox del formulario
            $oplist = $_POST['listbox'];
                # query para la busqueda del ID_registro (usuario normal) para mandar la notificacion
            $busqueda = "SELECT detalleventa.ID_registro
            FROM detalleventa
            JOIN ventas ON detalleventa.id_venta = ventas.id_venta
            WHERE ventas.id_venta = '$venta'";
                # Ejecutar la consulta
            $resultado = mysqli_query($conn, $busqueda);
                # Obtener el resultado como un arreglo asociativo
            $fila = mysqli_fetch_assoc($resultado);
                # Obtener el valor de ID_registro
            $id_registro = $fila['ID_registro'];
                # Actualizamos el estado de envio, respecto a la opcion seleccionada del input del form
            $update = ("UPDATE `ventas` SET `envio` = '$oplist' WHERE `ventas`.`id_venta` = $venta");
            $result = mysqli_query($conn,$update);

                # Se especifica el mensaje que sera enviado dependiendo el estado a actualizar
            if ($oplist == "Pendiente")
                {
                    $mensaje = "El paquete esta siendo preparado para proceso de envio.";
                }
            else if ($oplist == "Enviado")
                {
                    $mensaje = "El paquete a sido enviado.";
                }
            else if ($oplist == "Entregado")
                {
                    $mensaje = "El paquete a sido entregado al domicilio registrado.";
                }

                # enviamos la notificacion al usuario de la compra del estatus de su envio
            $updatenotify = ("  INSERT INTO `notifications` (`id_notif`, `notification`, `ID_registro`) 
                                VALUES (NULL, '$mensaje', '$id_registro');");
                # Se agrega la notificacion a la tbl
            $result = mysqli_query($conn,$updatenotify);
        }
    else if (isset($_POST['regresar']))
        {
            echo("<script>location.href = './my-orders.php';</script>");
        }
?>

<section class="single-order">
    <h1 align="center">Detalles del pedido</h1>
    <center style="margin-top:1.5rem">
        
    </center>

    <center style="margin-top:1.2rem">
        <form method="POST">
<?php
                # Query para obtener los datos de la tabla ventas
            $get_status = mysqli_query($conn,"SELECT * FROM ventas WHERE id_venta = $venta");
            $set_status = mysqli_fetch_array($get_status);
                # verificamos si el envio aparece como Entregado
            if ( $set_status['envio'] == "Entregado" )
                {   # si el envio es Entregado se bloquea el listbox y solo muestra el letrero
?>                  
                    <h1 align="center">El paquete ha sido entregado</h1>
<?php       
                }
            else
                {
                    # si el envio no coincide muestra el listbox
?>
                    <label for="selectestatus">Selecciona el estatus en el que se encuentra tu envio.</label>
                    <select class="form-select w-50" aria-label="Default select example" name="listbox">
                        <!-- Aqui pones el valor en el que se encuentra el pedido -->
                        <option selected style="background:#6669c5;color: white;"value="<?php echo $set_status['envio']?>"><?php echo $set_status['envio']?></option>
                        <option value="Pendiente">Pendiente</option>
                        <option value="Enviado">Enviado</option>
                        <option value="Entregado">Entregado</option>
                    </select>
<?php       
                }
?>
<?php
                # si el campo crastreo de la tbl envio es igual a Pendiente habilita el input
            if ( $set_status['crastreo'] == "Pendiente" )
                {
?>
                    <div class="mb-3 w-50 mt-2">
                        <label for="cd-rastreo" class="form-label">Ingresa el codigo de rastreo del pedido</label>
                        <input type="text" class="form-control" name="cd-rastreo" id="cd-rastreo" >
                        <small>Este codigo se enviara al cliente para que pueda rastrear su pedido</small>
                    </div>
<?php
                }
            else    # si el crastreo coincide se deshabilita el input y solo muestra la informacion
                {
                    # Obtenemos el valor del input desde la variable $set_status['crastreo']
                    $valor_input = $set_status['crastreo'];

                    # Verificamos si el input tiene contenido o está vacío
                    # Si ya tiene contenido el input se bloquea y solo muestra la info
                    $readonly = $valor_input !== '' ? 'readonly' : '';
?>
                    <div class="mb-3 w-50 mt-2">
                        <label for="cd-rastreo" class="form-label">El pedido ya cuenta con un codigo de rastreo</label>
                        <input type="text" class="form-control" name="cd-rastreo" id="cd-rastreo" value= "<?php echo $set_status['crastreo']; ?>"  <?php echo $readonly; ?>>
                        <small>Este codigo se enviara al cliente para que pueda rastrear su pedido</small>
                    </div>
<?php
                }
?>
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
                # sentencia sql para buscar la direccion del usuario comprador con ayuda del id de la venta
            $busqueda = "   SELECT direcciones.*, registro.*
                            FROM ventas
                            JOIN detalleventa ON ventas.id_venta = detalleventa.id_venta
                            JOIN direcciones ON detalleventa.ID_registro = direcciones.usuario_id
                            JOIN registro ON direcciones.usuario_id = registro.ID
                            WHERE ventas.id_venta = '$venta'";
            // Ejecutar la consulta
            $resultado = mysqli_query($conn, $busqueda);
            $set_buyer = mysqli_fetch_assoc($resultado);

            $buyer = $set_buyer['usuario_id'];  
            # Consulta sql para obtener el correo 
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
<?php
                # Si el envio coincide con Entregado
            if ( $set_status['envio'] == "Entregado" )
                {   # Solo se habilita el boton regresar de todo el form
?>
                <button class="btn btn-secondary" name="regresar">Regresar</button>
<?php       
                }
            else
                { # habilita ambos botones para poder guardar los cambio
?>
                    <button class="btn btn-secondary" name="regresar">Regresar</button>
                    <input type="submit" name="send-cd" id="send-cd" class="btn btn-info" value="Guardar">
<?php       
                }
?>
        </form>
    </center>
</section>

