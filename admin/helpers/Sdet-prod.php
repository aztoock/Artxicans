<?php 
$id_product = $_GET['product'];
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
                    
                    
				    <button class="btn-choose decline" name="delete-seller" onclick="location.href=''">Eliminar producto</button>
				   
				
                </div>
				</div>