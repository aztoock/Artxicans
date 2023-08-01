<?php
    $ban = "";
    $titulo = "";
    $mensaje = "";
    $id_reporte = $_GET['report'];
    
    if (isset($_POST['Aceptar']))
        {
            $boton = $_POST['Aceptar'];
            $id_usuario = $_POST['id_usuario'];
            $id_producto = $_POST['id_producto'];
            $id_star = $_POST['id_comentario'];
            $id_perfilcomment = $_POST['id_perfilcoment'];
            $id_seller = $_POST['id_seller'];
            $mensaje = $_POST['mensaje'];
            $titulo = $_POST['titulo'];
            $estatus = $_POST['estatus'];
            if ($boton == 1)
                {
                    # Obtener el id del usuario.
					$query = mysqli_query($conn,"SELECT ID_registro FROM stars WHERE id_star = $id_star");
					$data = mysqli_fetch_array($query);
                    $usuario = $data['ID_registro'];

                    /* echo "comentario"; */
                    $updatenotify = ("  INSERT INTO `notifications` (`id_notif`, `titulo`, `notification`, `tipo`, `ID_registro`) 
                                        VALUES (NULL, '$titulo', '$mensaje', '1', '$usuario')");
                        # Se agrega la notificacion a la tbl
                    $result = mysqli_query($conn,$updatenotify);

                        # deshabilito las restriccciones de clave FK
                    mysqli_query($conn, "SET FOREIGN_KEY_CHECKS = 0");
                        # Se elimina el comentario
                    mysqli_query($conn,"DELETE FROM stars WHERE id_star = $id_star ");
                        # habilito las restriccciones de clave FK
                    mysqli_query($conn, "SET FOREIGN_KEY_CHECKS = 1");

                    $updatenestatus = ("UPDATE `reports` SET `estatus` = '1' 
                                        WHERE `reports`.`id_report` = $id_reporte;");
                        # Se cambia el estatus de la tabla reportes(reports)
                    $result = mysqli_query($conn,$updatenestatus);

                    echo("<script>location.href = '../reports.php';</script>");
                }
            elseif ($boton == 2)
                {
                        # Si la notificacion es de tipo continuidad
                    if ( $estatus == 'Reportado' )
                        {
                            $titulo = "Modificacion de producto aceptada";
                            $mensaje = "Tu producto a sido puesto en linea de nuevo, agradecemos tu pronta respuesta y modificaciones, esperemos que sigas cumpliendo con las reglas del sitio";

                                # Obtener el id del vendedor.
                            $query = mysqli_query($conn,"SELECT ID_registro FROM products WHERE id_product = $id_producto");
                            $data = mysqli_fetch_array($query);
                            $seller = $data['ID_registro'];
                                # Establecemos la notificaicon adecuada para el caso
                            $updatenotify = ("  INSERT INTO `notifications` (`id_notif`, `titulo`, `notification`, `tipo`, `ID_registro`) 
                                                VALUES (NULL, '$titulo', '$mensaje', '1', '$seller')");
                                # Se agrega la notificacion a la tbl
                            $result = mysqli_query($conn,$updatenotify);
                                # Seteamos el estatus del reporte en 1 para que no se vea en ninguna lista (se queda el historico en la BD)
                            $updatenestatus = ("UPDATE `reports` SET `estatus` = '1' 
                                                WHERE `reports`.`id_report` = $id_reporte;");
                                # Se cambia el estatus de la tabla reportes(reports)
                            $result = mysqli_query($conn,$updatenestatus);
                                # Seteamos estatus del producto a Aprobado para ponerlo en linea
                            $updatenestatus = ("UPDATE `products` SET `estatus` = 'Aprobado' 
                                                WHERE `products`.`id_product` = $id_producto;");
                                # Se cambia el estado de la tabla productos(products)
                            $result = mysqli_query($conn,$updatenestatus);

                            echo("<script>location.href = '../reports.php';</script>");
                        }
                    else    # Si el reporte es de primera vez
                        {
                                /* echo "Producto"; */
                            # Obtener el id del vendedor.
                            $query = mysqli_query($conn,"SELECT ID_registro FROM products WHERE id_product = $id_producto");
                            $data = mysqli_fetch_array($query);
                            $seller = $data['ID_registro'];
                            $updatenotify = ("  INSERT INTO `notifications` (`id_notif`, `titulo`, `notification`, `tipo`, `ID_registro`) 
                                                VALUES (NULL, '$titulo', '$mensaje', '2', '$seller')");
                                # Se agrega la notificacion a la tbl
                            $result = mysqli_query($conn,$updatenotify);

                            $updatenestatus = ("UPDATE `reports` SET `estatus` = '2' 
                                                WHERE `reports`.`id_report` = $id_reporte");
                                # Se cambia el estatus de la tabla reportes(reports)
                            $result = mysqli_query($conn,$updatenestatus);

                            $updatenestatus = ("UPDATE `products` SET `estatus` = 'Reportado' 
                                                WHERE `products`.`id_product` = $id_producto;");
                                # Se cambia el estado de la tabla productos(products)
                            $result = mysqli_query($conn,$updatenestatus);

                            echo("<script>location.href = '../reports.php';</script>");
                        } 
                }
            elseif ($boton == 3)
                {
                    /* echo "Aceptado 3"; */

                    # Obtener el id del usuario.
					$query = mysqli_query($conn,"SELECT ID_registro FROM profile_comments WHERE id_comment = $id_perfilcomment");
					$data = mysqli_fetch_array($query);
                    $usuario = $data['ID_registro'];

                    /* echo "comentario"; */
                    $updatenotify = ("  INSERT INTO `notifications` (`id_notif`, `titulo`, `notification`, `tipo`, `ID_registro`) 
                                        VALUES (NULL, '$titulo', '$mensaje', '3', '$usuario')");
                        # Se agrega la notificacion a la tbl
                    $result = mysqli_query($conn,$updatenotify);

                        # deshabilito las restriccciones de clave FK
                    mysqli_query($conn, "SET FOREIGN_KEY_CHECKS = 0");
                        # Se elimina el comentario
                    mysqli_query($conn,"DELETE FROM profile_comments WHERE id_comment = $id_perfilcomment ");
                        # habilito las restriccciones de clave FK
                    mysqli_query($conn, "SET FOREIGN_KEY_CHECKS = 1");

                    $updatenestatus = ("UPDATE `reports` SET `estatus` = '1' 
                                        WHERE `reports`.`id_report` = $id_reporte;");
                        # Se cambia el estatus de la tabla reportes(reports)
                    $result = mysqli_query($conn,$updatenestatus);

                    echo("<script>location.href = '../reports.php';</script>");
                }
            elseif ($boton == 4)
                {
                    /* echo "Vendedor"; */
                        # Obtener el id del usuario.
					$query = mysqli_query($conn,"SELECT ID_registro FROM reg_sellers WHERE IDregseller = $id_seller");
					$data = mysqli_fetch_array($query);
                    $usuario = $data['ID_registro'];

                    $updatenotify = ("  INSERT INTO `notifications` (`id_notif`, `titulo`, `notification`, `tipo`, `ID_registro`) 
                                        VALUES (NULL, '$titulo', '$mensaje', '4', '$usuario')");
                        # Se agrega la notificacion a la tbl
                    $result = mysqli_query($conn,$updatenotify);

                    $updatenestatus = ("UPDATE `reports` SET `estatus` = '2' 
                                        WHERE `reports`.`id_report` = $id_reporte;");
                        # Se cambia el estatus de la tabla reportes(reports)
                    $result = mysqli_query($conn,$updatenestatus);

                    $updatenestatus = ("UPDATE `reg_sellers` SET `solicitud` = 'Reportado' 
                                        WHERE `reg_sellers`.`IDregseller` = $id_seller;");
                        # Se cambia el estado de la tabla productos(products)
                    $result = mysqli_query($conn,$updatenestatus); 

                    echo("<script>location.href = '../reports.php';</script>");
                }
            elseif ($boton == 5)
                {
                    /* echo "Comprador"; */

                }
        }
    else if (isset($_POST['Rechazar']))
        {
            /* $boton = $_POST['Rechazar']; */
            mysqli_query($conn,"DELETE FROM reports WHERE id_report = '$id_reporte'");
            echo("<script>location.href = '../reports.php';</script>"); 
        }
?>

<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Reporte</h3>
					</div>
                <div class="solicitud-vend">

				<?php 
                    # Obtener el id del reporte que se selecciono en la pagina previa.
					$query = mysqli_query($conn,"SELECT * FROM reports WHERE id_report = $id_reporte");
					$data = mysqli_fetch_array($query);
                    $tipo = $data['type']; # Obtenemos el tipo de reporte y dependiendo del tipo se realizaran las acciones que estan en el Switch
                    # Obtener la informacion de la tabla registro si coincide con el ID de quien hizo el reporte
                    $usuario = $data['ID_registro'];
                    $query2 = mysqli_query($conn,"SELECT * FROM registro WHERE ID = $usuario");
                    $data2 = mysqli_fetch_array($query2);
				?>
                    <h2 class="title-report">Tipo de reporte:&nbsp;<strong><?php echo $tipo?></strong></h2>
                    <p class="data-report">El usuario&nbsp;<strong ><?php echo $data2['Nombre']?></strong> hizo un reporte.</p>
                    <p>El usuario &nbsp;reporta 
                        <?php 
                            switch($tipo){
                            case 'Comentario': 
                                    $ban = 1;
                                    $titulo = "Reporte de comentario";
                                    $mensaje = "Tu comentario fue reportado y ha sido eliminado, por enfringir nuestras normas de comunidad.";
                                    # Obtener informacion de los comentarios
                                    $star=$data['id_star'];
                                    $getStars = mysqli_query($conn,"SELECT * FROM stars WHERE id_star = $star");
                                    $data_star = mysqli_fetch_array($getStars);
                                    echo "<strong style='color:#d9534f'>Un comentario</strong>&nbsp;";
                                    echo "y su información del comentario reportado:<br><center><strong>Comentario:</strong>&nbsp;".$data_star['comment']."</center>";
                            break;
                            case 'Producto': 
                                    $ban = 2;
                                    $titulo = "Reporte de producto";
                                    $mensaje = "Tu producto fue reportado, por infringir las normas, revisa tu producto, puedes cambiar la informacion de tu producto y informar al administrador para verificar los cambios.";
                                    # Obtener informacion de los productos
                                    $product = $data['id_product'];
                                    $getProducts = mysqli_query($conn,"SELECT * FROM products WHERE id_product = $product");
                                    $data_product = mysqli_fetch_array($getProducts); 

                                    echo "<strong style='color:#d9534f'>Un producto</strong>&nbsp;";
                                    echo "y su información del producto reportado:<br>
                                    <article class='report-prod'>
                                        <div style='display:flex; flex-direction:row; gap: 0.5rem; flex-wrap:wrap;align-items:center;justify-content:center'>
                                            <img style='width:100px; height:100px; border-radius:10px' src='../../assets/products/".$data_product['image1']."' alt='image1'/>
                                            <img style='width:100px; height:100px; border-radius:10px' src='../../assets/products/".$data_product['image2']."' alt='image2'/>
                                            <img style='width:100px; height:100px; border-radius:10px' src='../../assets/products/".$data_product['image3']."' alt='image3'/>
                                        </div>
                                        <div> <br>
                                            <p><strong>Producto:</strong>&nbsp;".$data_product['product']."</p><br>
                                            <p style='color:green'><strong style='color:black'>Precio:</strong>&nbsp;$".$data_product['price']."</p><br>
                                            <p><strong>Categoria:</strong>&nbsp;".$data_product['category']."</p><br>
                                            
                                        </div>
                                    </article>";
                            break;  
                            case 'Comentario Perfil':
                                    $ban = 3;
                                    $titulo = "Reporte comentario en perfil";
                                    $mensaje =  "Tu comentario en el perfil de un vendedor fue reportado, por infringir las normas de la comunidad y ha sido eliminado";
                                    # Obtener informacion de los comentarios a perfiles
                                    $comment = $data['id_comment'];
                                    $getComments = mysqli_query($conn,"SELECT * FROM profile_comments WHERE id_comment = $comment");
                                    $data_comment = mysqli_fetch_array($getComments);

                                    echo "<strong style='color:#d9534f'>Un Comentario de un perfil de vendedor</strong>";
                                    echo "&nbsp;y su información del comentario reportado:<br><center><strong>Comentario:</strong>&nbsp;".$data_comment['comment']."</center>";
                            break;
                            case 'Vendedor': 
                                    $titulo = "Reporte de perfil de vendedor";
                                    $mensaje = "Tu perfil de vendedor fue reportado, por infringir las normas de la comunidad, revisa tu informacion y informa al administrador para validar los cambios";
                                    $ban = 4;
                                    # Obtener informacion de los vendedores
                                    $seller = $data['seller'];
                                    $getSellers = mysqli_query($conn,"SELECT * FROM reg_sellers WHERE ID_registro = $seller");
                                    $data_seller =mysqli_fetch_array($getSellers);

                                    echo "<strong style='color:#d9534f'>Un vendedor</strong>";
                                    echo "&nbsp;El vendedor reportado es:";
                                    echo "
                                        <article class='seller-report'> 
                                            <p style='color:#6669c5'>".$data_seller['nickname']."</p>
                                        
                                        </article>";
                            break;
                            case 'Comprador': 
                                    $mensaje = "Tu compra fue reportado.";
                                    $ban = 5;
                                    # Obtener informacion los compradores.
                                    $buyer = $data['buyer'];
                                    $getBuyer = mysqli_query($conn,"SELECT * FROM registro WHERE ID = $buyer");
                                    $data_buyer = mysqli_fetch_array($getBuyer);
                                    echo "<strong style='color:#d9534f'>Un comprador</strong>";
                                    echo "&nbsp;El comprador reportado es:";
                                    echo "
                                        <article>
                                            <p style='color:#6669c5'>".$data_buyer['Nombre']."</p>
                                            <p>".$data_buyer['Correo']."</p>
                                        </article>";
                            }
                        ?> 
                    </p>
                    <?php if(!empty($data['report'])){?>
                    <p class="desc-container" align="center"><strong>
                    Descripción de usuario del motivo de su reporte </strong><br>
                        <?php echo $data['report']?>
                    </p>
                    <?php }?>
                    <p class="note-report" style="font-size:0.8rem">-Al rechazar el reporte, se ignorara cualquier tipo de reporte que se haya hecho y se eliminara también de la tabla de reportes.<p>
                    <!-- <p class="note-report">-Al Aceptar el reporte, si es un reporte de comentario, se eliminara el comentario reportado, el caso de los reportes de vendedores, reportes de compradores y reportes de productos podrás eliminarlos manualmente y llevar un control de investigación para verificar si lo reportado está rompiendo algún reglamento.<p>
                    -->
                    <p class="note-report" style="font-size:0.8rem">-Al Aceptar el reporte, se eliminara el comentario reporté, se eliminara el producto reportado, se eliminara la cuenta del comprador reportada y para los vendedores reportados solo se les notificara una queja del reporte y con un posible bloqueo.<p>
                    <form method="POST">
                    <div class="report-buttons">
                        <input type="hidden" value="<?php echo $usuario;?>" name="id_usuario">
                        <input type="hidden" value="<?php echo $product;?>" name="id_producto">
                        <input type="hidden" value="<?php echo $star;?>" name="id_comentario">
                        <input type="hidden" value="<?php echo $comment;?>" name="id_perfilcoment">
                        <input type="hidden" value="<?php echo $data_seller['IDregseller'];?>" name="id_seller">
                        <input type="hidden" value="<?php echo $mensaje;?>" name="mensaje">
                        <input type="hidden" value="<?php echo $titulo;?>" name="titulo">
                        <input type="hidden" value="<?php echo $data_product['estatus'];?>" name="estatus">
                        <button class="btn-choose decline" type="submit" name="Rechazar" value="<?php echo $ban;?>">Rechazar</button>
					    <button class="btn-choose accept" type="submit" name="Aceptar" value="<?php echo $ban;?>">Aceptar</button>
                    </div>
                    </form>
                </div>
				</div>