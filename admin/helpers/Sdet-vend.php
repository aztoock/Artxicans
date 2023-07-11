<?php
    $id_vendedor = $_GET['id_vend'];
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            if ( isset($_POST['Aceptar']) )
                {
                    $mensaje = $_POST['mensaje'];           # Obtengo datos del formulario
                    $id_usuario = $_POST['id_usuario'];     # Obtengo datos del formulario
                    $query = (" UPDATE `reg_sellers` 
                                SET `solicitud` = 'Aprobado'
                                WHERE `reg_sellers`.`IDregseller` = '$id_vendedor';");
                        # Actualizo el estatus del vendedor
                    $result = mysqli_query($conn,$query);
                    
                    $updatenotify = ("  INSERT INTO `notifications` (`id_notif`, `notification`, `ID_registro`) 
                                        VALUES (NULL, '$mensaje', '$id_usuario');");
                        # Se agrega la notificacion a la tbl
                    $result = mysqli_query($conn,$updatenotify);
                }
            elseif ( isset($_POST['Rechazar']) )
                {
                    $mensaje = $_POST['mensaje'];       # Obtengo datos del formulario
                    $id_usuario = $_POST['id_usuario']; # Obtengo datos del formulario
                    $mensaje = $_POST['mensaje'];
                    $query = (" UPDATE `reg_sellers` 
                                SET `solicitud` = 'Rechazado'
                                WHERE `reg_sellers`.`IDregseller` = '$id_vendedor';");
                        # Actualizo el estatus del vendedor
                    $result = mysqli_query($conn,$query);

                    $updatenotify = ("  INSERT INTO `notifications` (`id_notif`, `notification`, `ID_registro`) 
                                        VALUES (NULL, '$mensaje', '$id_usuario');");
                        # Se agrega la notificacion a la tbl
                    $result = mysqli_query($conn,$updatenotify);
                }
        }
?>

<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Solicitud de vendedores</h3>
						
					</div>
                <div class="solicitud-vend">

				<?php 
					$query = mysqli_query($conn,"SELECT * FROM reg_sellers WHERE IDregseller = $id_vendedor");
					$data = mysqli_fetch_array($query);
				?>
					<img src="../../user/files<?php echo $data['identificador']?>" alt="identificacion" style="width:250px;height:140px">
                    
                    <table class="table-products" >
                        
                     <tbody>
                      <tr>
                        <td>
                    		<p><strong>Nombre:</strong>&nbsp;<?php echo $data['Nombre']?></p>
                    	</td>
                      </tr>
                      <tr>
                        <td>
							<p><strong>Apellidos:</strong>&nbsp;<?php echo $data['apellidos']?></p>
						</td>
                      </tr>
                      <tr>
                        <td>
							<p><strong>Nickname:</strong>&nbsp;<?php echo $data['nickname']?></p>
						</td>
                      </tr>
                      <tr>
                        <td>
							<p><strong>Lada:</strong>&nbsp;+<?php echo $data['lada']?></p>
					    </td>
                      </tr>
                      <tr>
                        <td>
							<p><strong>Telefono:</strong>&nbsp;<?php echo $data['telefono']?></p>
						</td>
                      </tr>
                      <tr>
                        <td>
							<p><strong>Referencia:</strong>&nbsp;<?php echo $data['telefonoref']?></p>
						</td>
                      </tr>
                      <tr>
                      	<td>
							<p><strong>Domicilio:</strong>&nbsp;<?php echo $data['domicilio']?></p>
						</td>
                      </tr>
                      <tr>
                        <td>
							<p><strong>Codigo Postal:</strong>&nbsp;<?php echo $data['postal']?></p>
						</td>
                      </tr>
                      <tr>
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