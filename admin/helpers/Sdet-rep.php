<?php
    $id_reporte = $_GET['report'];
    
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
                                    # Obtener informacion de los comentarios
                                    $star=$data['id_star'];
                                    $getStars = mysqli_query($conn,"SELECT * FROM stars WHERE id_star = $star");
                                    $data_star = mysqli_fetch_array($getStars);
                                    echo "<strong style='color:#d9534f'>Un comentario</strong>&nbsp;";
                                    echo "y su información del comentario reportado:<br><center><strong>Comentario:</strong>&nbsp;".$data_star['comment']."</center>";
                            break;
                            case 'Producto': 
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
                                    # Obtener informacion de los comentarios a perfiles
                                    $comment = $data['id_comment'];
                                    $getComments = mysqli_query($conn,"SELECT * FROM profile_comments WHERE id_comment = $comment");
                                    $data_comment = mysqli_fetch_array($getComments);

                                    echo "<strong style='color:#d9534f'>Un Comentario de un perfil de vendedor</strong>";
                                    echo "&nbsp;y su información del comentario reportado:<br><center><strong>Comentario:</strong>&nbsp;".$data_comment['comment']."</center>";
                            break;
                            case 'Vendedor': 
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
                        
                        <input class="btn-choose decline" type="submit" name="Rechazar" value="Rechazar">
					    <input class="btn-choose accept" type="submit" name="Aceptar" value="Aceptar">
                    </div>
                    </form>
				
                </div>
				</div>