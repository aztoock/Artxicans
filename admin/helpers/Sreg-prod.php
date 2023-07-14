<?php 
$id_product = $_GET['id_product'];
if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            if ( isset($_POST['Aceptar']) )
                {
                    $mensaje = $_POST['mensaje'];           # Obtengo datos del formulario
                    $id_usuario = $_POST['id_usuario'];     # Obtengo datos del formulario
                    $query = (" UPDATE `products` 
                                SET `estatus` = 'Aprobado'
                                WHERE `products`.`id_product` = '$id_product';");
                        # Actualizo el estatus del vendedor
                    $result = mysqli_query($conn,$query);
                    
                    $updatenotify = ("  INSERT INTO `notifications` (`id_notif`, `notification`, `ID_registro`) 
                                        VALUES (NULL, '$mensaje', '$id_usuario');");
                        # Se agrega la notificacion a la tbl
                    $result = mysqli_query($conn,$updatenotify);
                    echo("<script>location.href = '../reg-productos.php';</script>");
                }
            elseif ( isset($_POST['Rechazar']) )
                {
                    $mensaje = $_POST['mensaje'];       # Obtengo datos del formulario
                    $id_usuario = $_POST['id_usuario']; # Obtengo datos del formulario
                    $mensaje = $_POST['mensaje'];
                    $query = (" UPDATE `products` 
                                SET `estatus` = 'Rechazado'
                                WHERE `products`.`ID_registro` = '$id_vendedor';");
                        # Actualizo el estatus del vendedor
                    $result = mysqli_query($conn,$query);

                    $updatenotify = ("  INSERT INTO `notifications` (`id_notif`, `notification`, `ID_registro`) 
                                        VALUES (NULL, '$mensaje', '$id_usuario');");
                        # Se agrega la notificacion a la tbl
                    $result = mysqli_query($conn,$updatenotify);
                    echo("<script>location.href = '../reg-productos.php';</script>");
                }
        }
?>

<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Producto</h3>
						
					</div>
                <div class="solicitud-vend">

				<?php 
					$query = mysqli_query($conn,"SELECT * FROM products WHERE id_product = $id_product");
					$data = mysqli_fetch_array($query);
				?>
                    <div class="images-products">
                        <img src="../../assets/products/<?php echo $data['image1']?>" alt="">
                        <img src="../../assets/products/<?php echo $data['image2']?>" alt="">
                        <img src="../../assets/products/<?php echo $data['image3']?>" alt="">

                    </div>
                    <table class="table-products">
                        
                        <tbody>
                        <tr>
                            <td>
                                <p><strong>Producto:</strong><?php echo $data['product']?></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>Precio:</strong><?php echo $data['price'];?></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>Cantidad:</strong><?php echo $data['stock']?></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>Descripcion:</strong><?php echo $data['description']?></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>Categoria:</strong><?php echo $data['category']?></p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <form method="POST" class="form-vend">
					    <textarea class="txt-send" name="mensaje" placeholder="Escribe un mensaje al usuario."></textarea>
                        <input type="hidden" name="id_usuario" value=" <?php echo $data['ID_registro']; ?> ">
					    <input class="btn-choose decline" type="submit" name="Rechazar" value="Rechazar">
					    <input class="btn-choose accept" type="submit" name="Aceptar" value="Aceptar">
				    </form>
                </div>
				</div>