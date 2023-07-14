<?php 
$id_vendedor = $_GET['seller'];
if(isset($_POST['delete-seller']))
    {
        $id_seller = $_POST['delete-seller'];
        $conn->query("DELETE FROM reg_sellers WHERE IDregseller = '$id_seller'");
        header("Location: ../sellers.php");
    }
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
					<form method="post">
				    <button type="submit"  class="btn-choose decline" name="delete-seller" value="<?php echo $data['IDregseller']; ?>">Eliminar vendedor</button>
					</form>
                </div>
				</div>