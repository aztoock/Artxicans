<?php 
$id_vendedor = $_GET['seller'];
  
?>

<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Vendedores</h3>
						
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
				    <button class="btn-choose decline" name="delete-seller" onclick="location.href=''">Eliminar vendedor</button>
				   
				
                </div>
				</div>