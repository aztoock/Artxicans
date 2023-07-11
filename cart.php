<?php 
    include('./global/conexion.php');
    include('./templates/cabecera.php');
    include('global/cart.php');
    if(@!$_SESSION['user'])
        {
?>
           <div class="m-0 vh-100 row justify-content-center align-items-center">
            <div class="alert alert-dark text-center p-5 col-auto" role="alert">
            Para poder ver tu carrito <a href="./login.php" class="alert-link">Inicia sesión</a> o <a href="#" class="alert-link">Registrate</a>.
            </div>
        </div>
<?php
        }
    else
        {
            if (!empty($_SESSION['cart']))
                {
?>
                    <section class="cart">
                        <h2 align="center">Carrito de Compras</h2>
                        
                        <div class="mt-2  row justify-content-center align-items-center">
                            <div class="alert alert-dark text-center p-2 col-auto" role="alert">
                                Para poder agregar mas cantidad de productos del mismo producto, puedes modificar en cantidad 1 al numero de productos que desees y posteriormente presionar el botón "cuantos".
                            </div>
                        </div>

                        <div class="table-responsive-lg ">
                            <table class="table table-striped mt-3 p-2 cart-table-1">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">Producto</th>
                                        <th scope="col">Cantidad</th>
                                        <th scope="col">Precio unitario</th>
                                        <th scope="col">Subtotal</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
<?php
                                $total = 0;
                                $ayuda = 0;
                                foreach ($_SESSION['cart'] as $indice => $product)
                                    {
?>                                  
                                    <tr>
                                        <td align="center" scope="row"><img src="./assets/products/<?php echo $product['image'];?>" style="width:60px;height:60px"></td>
                                        <td scope="row"><?php echo $product['product']; ?></td>
                                        <td scope="row">
                                        <form method="post" action="">
                                                <input name="midprod" type="hidden" value="<?php print $indice?>" >
                                                <input name="cantidad" value=" <?php echo $product['cantidad'];?>" style="width: 2.5rem">
                                                <button type="submit" class="btn btn-info">
                                                    <i class='bx bx-refresh bx-sm'></i>
                                                    <input type="hidden" name="button-cart"  class="btn btn-info" value = "Actualizar" type="submit">
                                                </button>
                                            </form>
                                        </td>
                                        <td scope="row">$<?php echo $product['precio']; ?></td>
                                        <td scope="row">$<?php echo $product['precio'] * $product['cantidad']; ?></td>
                                        <td scope="row">
                                            <form action = "" method = "post">
                                                <input type="hidden" name="idproduct" value="<?php echo openssl_encrypt($product['idproduct'],COD,KEY);?>">
                                                <button class = "btn btn-danger" name = "button-cart" value = "eliminar" type = "submit">
                                                    Eliminar
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
<?php
                                        $total = $total + ($product['precio'] * $product['cantidad']);
                                    }
?>  
                                    <tr>
                                    <td colspan="3" align="right"></td>
                                    <th align="center"><h3>Total</h3></th>
                                    <td scope="row"><h3>$<?php echo number_format($total,2) ?></h3></td>
                                    </tr>
                                    
                                    <td></td>
                                    <td colspan="4">
                                        
                                    </td>
                                    <td></td>
                                </tbody>
                            </table>
                        </div>
                        <center class="mt-4">
                        
                        </center>

                        <div class="alert alert-primary" align="center">
                                                La confirmación de compra se enviará a:<strong>
                                                <?php print_r($correo."<br> "); 
                                                $id_user = $_SESSION['id'];
                                                $query = mysqli_query($conn,"SELECT * FROM registro WHERE ID = $id_user");
                                                $data = mysqli_fetch_array($query);
                                                $dir = $data['direccion'];
                                                if($dir == 1){
                                                ?></strong>
                                                Y será enviada a la dirección registrada: <strong>
                                                <?php print_r($direccion);?>
                                                </strong>
                                                <br>
                                                <center><button type="button" class="btn btn-info mt-2"  data-bs-toggle="modal" data-bs-target="#ModalAddress">Ver mi dirección</button></center>
                                                                <!-- Modal Address -->
                                                                    
                                                                        <div class="modal fade" id="ModalAddress" tabindex="-1" aria-labelledby="ModalAddress" aria-hidden="true">
                                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                                            <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Mi dirección</h1>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                Esta es la dirección en la que se enviara tu pedido:
                                                                                <?php 
                                                                                    $sql = mysqli_query($conn,"SELECT * FROM direcciones WHERE usuario_id = $id_user");
                                                                                    $row = mysqli_fetch_array($sql);?>

                                                                                   <p><strong>Dirección:</strong>&nbsp;<?php  echo $row['direccion1'];?></p>
                                                                                   <p><strong>Ciudad:</strong>&nbsp;<?php echo $row['ciudad'];?></p>
                                                                                   <p><strong>Estado:</strong>&nbsp;<?php  echo $row['estado'];?></p>
                                                                                   <p><strong>Pais:</strong>&nbsp;<?php  echo $row['estado'];?></p>
                                                                                   <p><strong>Codigo Postal:</strong>&nbsp;<?php  echo $row['codigopostal'];?></p>
                                                                                   <p><strong>Telefono:</strong>&nbsp;<?php  echo $row['telefono'];?></p>
                                                                                   <p><strong>Instrucciones:</strong>&nbsp;<?php  echo $row['instrucciones'];?></p>

                                                                                
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                                                <button type="button" class="btn btn-info" data-bs-target="#ModalEdit" data-bs-toggle="modal">Editar</button>
                                                                            </div>
                                                                            </div>
                                                                        </div>
                                                                        </div>
                                                                        <!-- Ends Modal -->

                                                                        <!-- Modal Edit -->
                                                                        <div class="modal fade" id="ModalEdit" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                                                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                                                    <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Editar mi dirección</h1>
                                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                    <form action="" method="POST">
                                                                                    <div class="mb-3">
                                                                                        <label for="direccion" class="col-form-label">Dirección:</label>
                                                                                        <textarea class="form-control" id="direccion" name="direccion" style="resize:none"><?php echo $row['direccion1']?></textarea>
                                                                                    </div>
                                                                                    <div class="mb-3">
                                                                                        <label for="ciudad" class="col-form-label">Ciudad:</label>
                                                                                        <input type="text" class="form-control" id="ciudad" name="ciudad" value="<?php echo $row['ciudad']?>">
                                                                                    </div>
                                                                                    <div class="mb-3">
                                                                                        <label for="estado" class="col-form-label">Estado:</label>
                                                                                        <input type="text" class="form-control" id="estado" name="estado" value="<?php echo $row['estado']?>">
                                                                                    </div>
                                                                                    <div class="mb-3">
                                                                                        <label for="pais" class="col-form-label">Pais:</label>
                                                                                        <input type="text" class="form-control" id="pais" name="pais" value="<?php echo $row['pais']?>">
                                                                                    </div>
                                                                                    <div class="mb-3">
                                                                                        <label for="cp" class="col-form-label">Código postal:</label>
                                                                                        <input type="text" class="form-control" id="cp" name="cp" value="<?php echo $row['codigopostal']?>">
                                                                                    </div>
                                                                                    <div class="mb-3">
                                                                                        <label for="telefono" class="col-form-label">Teléfono:</label>
                                                                                        <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo $row['telefono']?>">
                                                                                    </div>
                                                                                    <div class="mb-3">
                                                                                        <label for="instrucciones" class="col-form-label">Instrucciones:</label>
                                                                                        <textarea class="form-control" id="instrucciones" name="instrucciones" style="resize:none"><?php echo $row['instrucciones']?></textarea>
                                                                                    </div>
                                                                                    
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button class="btn btn-secondary" data-bs-target="#ModalAddress" data-bs-toggle="modal">Regresar</button>
                                                                                        <button type="submit" class="btn btn-success" >Actualizar</button>
                                                                                    </div>
                                                                                    </form>
                                                                                    </div>
                                                                                </div>
                                                                                </div>

                                                                        <!-- Ends Modal Edit -->
                                               <?php }else{
                                                    print_r("Aún no tenemos tu dirección par enviar tu pedido.");
                                                ?>
                                                    <!-- </strong> --><br>
                                                <center><button type="button" class="btn btn-info" onclick="location.href='datosdireccion.php'">Agregar dirección </button></center>
                                                <?php }?>
                                                
                                            </div>
                                            <center>
                                            <button class="back btn btn-secondary" onclick="location.href='index.php'">Regresar</button>
                                            <?php
                                            include 'global/btncart.php'
?>
                                               </center>
                    </section>
<?php 
                }
            else
                {
?>
        <div class="m-0 vh-100 row justify-content-center align-items-center">
            <div class="alert alert-dark text-center p-5 col-auto" role="alert">
                No hay productos agregados a su carrito. <a href="./index.php" class="alert-link">Agregar productos</a>        
            </div>
        </div>
<?php
                }
        }
    include('./templates/pie.php');
?>