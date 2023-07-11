<?php 
$id_order = $_GET['order'];
?>

<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Pedido</h3>
						
					</div>
                <div class="solicitud-vend">

				<?php 
                    # Obtenemos los datos de la tabla venta
					$query = mysqli_query($conn,"SELECT * FROM ventas WHERE id_venta = $id_order");
                    # Obtenemos los datos de la tabla detalleventa, pero como son puras llaves foraneas, entonces unimos las tablas de donde querremos sacar la informacion
                    $query2 = mysqli_query($conn,"SELECT * FROM detalleventa INNER JOIN registro ON
                    detalleventa.ID_registro = registro.ID WHERE detalleventa.id_venta = $id_order");
                    # Consulta par aobtener los productos que se pidieron
                    $query3 = mysqli_query($conn,"SELECT * FROM detalleventa INNER JOIN products ON
                    detalleventa.id_producto = products.id_product WHERE detalleventa.id_venta = '$id_order'");
					
                    $data = mysqli_fetch_array($query);
                    $data2 = mysqli_fetch_array($query2);

                ?>
                    
                  <section class="datos-pedido">
                    
                    <p align="center">Pedido de: <strong><?php echo $data2['Nombre']?></strong></p>
                    <p align="center"><?php echo $data['correo']?></p>
                  <!-- Fecha -->
                    <article class="date">
                        <p><?php echo $data['fecha']?></p>
                    </article>
                    <!-- Lista de pedido -->
                    <article class="order-list-data">
                        <?php while($more_data2 = mysqli_fetch_array($query3)){
                                  $id_product = $more_data2['id_product'];
                                  # Consulta para obtener la cantidad de cada producto, pero que conicida con la venta en la que estamos.
                                  $checkCant = mysqli_query($conn,"SELECT * FROM detalleventa WHERE id_producto = '$id_product' AND id_venta = '$id_order'");
                                  $getCant = mysqli_fetch_array($checkCant);
                                  
                                  # Para sacar el precio total de cada producto comprado
                                  $cantidad = $getCant['cantidad'];
                                  $unitario = $getCant['preciounitario'];
                                  $precio = $cantidad * $unitario; 
                            ?>
                            
                            <div class="container-list">
                                <div class="product-order">
                                    <p><?php echo $more_data2['product']?></p>
                                </div>

                                <div class="image-order">
                                    <img src="../../assets/products/<?php echo $more_data2['image1']?>" alt="product">
                                </div>

                                <div class="cantidad">
                                    <p><strong>Cantidad:</strong>&nbsp;<?php echo $cantidad?> Piezas</p>
                                </div>

                                <div class="precio">
                                    <p><strong>Total:</strong>&nbsp;$<?php echo $precio?></p>
                                </div>

                            </div>
                            
                            
                            
                        <?php }?> 
                           
                    </article>
                    <center class="total">
                            <p style="color:green"><strong style="color:black">Total:</strong>&nbsp;$<?php echo $data['total']?></p>
                    </center>    
                    
                   </section>
                </div>
				</div>