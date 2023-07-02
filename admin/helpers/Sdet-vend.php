<?php
    $id_vendedor = $_GET['id_vend'];
    if ( isset($_POST['Aceptar']) )
        {
            $query = (" UPDATE `reg_sellers` 
                        SET `solicitud` = 'Aprobado'
                        WHERE `reg_sellers`.`IDregseller` = '$id_vendedor';");
            $result = mysqli_query($conn,$query);
        }
    else
        {
            $query = (" UPDATE `reg_sellers` 
                        SET `solicitud` = 'Rechazado'
                        WHERE `reg_sellers`.`IDregseller` = '$id_vendedor';");
            $result = mysqli_query($conn,$query);
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
					<img src="../user/files<?php echo $data['identificador']?>" alt="identificacion" style="width:250px;height:140px">
                    <p><strong>Nombre:</strong>&nbsp;<?php echo $data['Nombre']?></p>
                    <p><strong>Apellidos:</strong>&nbsp;<?php echo $data['apellidos']?></p>
                    <p><strong>Nickname:</strong>&nbsp;<?php echo $data['nickname']?></p>
                    <p><strong>Lada:</strong>&nbsp;+<?php echo $data['lada']?></p>
                    <p><strong>Telefono:</strong>&nbsp;<?php echo $data['telefono']?></p>
                    <p><strong>Referencia:</strong>&nbsp;<?php echo $data['telefonoref']?></p>
                    <p><strong>Domicilio:</strong>&nbsp;<?php echo $data['domicilio']?></p>
                    <p><strong>Codigo Postal:</strong>&nbsp;<?php echo $data['postal']?></p>
                    <form method="POST" class="form-vend">
					    <textarea class="txt-send" placeholder="Escribe un mensaje al usuario."></textarea>
					    <input class="btn-choose decline" type="submit" name="Rechazar" value="Rechazar">
					    <input class="btn-choose accept" type="submit" name="Aceptar" value="Aceptar">
				    </form>
				
                </div>
				</div>