<?php 
    include('./global/conexion.php');
    include('./templates/cabecera.php');
    include('global/cart.php');
    if(@!$_SESSION['user'])
        {
?>
            <div class="alert alert-danger">
                Para poder ver tu carrito inicia sesion o registrate.
            </div>
<?php
        }
    else
        {
            if (!empty($_SESSION['cart']))
                {
?>
                    <section class="cart">
                        <div class="table-responsive-lg">
                            <table class="table table-striped mt-5 p-2">
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
                                        <td align="center" scope="row"><img src="assets/products/<?php echo $product['image'];?>" style="width:60px;height:60px"></td>
                                        <td scope="row"><?php echo $product['product']; ?></td>
                                        <td scope="row">
                                            <form method="post" action="">
                                                <input name="midprod" type="hidden" value="<?php print $indice?>" >
                                                <input name="cantidad" value=" <?php echo $product['cantidad'];?>" >
                                                <input name="button-cart" value = "cuantos" type="submit">
                                            </form>
                                        </td>
                                        <td scope="row"><?php echo $product['precio']; ?></td>
                                        <td scope="row"><?php echo $product['precio'] * $product['cantidad']; ?></td>
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
                                    <td scope="row"><h3><?php echo number_format($total,2) ?></h3></td>
                                    </tr>
                                    
                                    <td></td>
                                    <td colspan="4">
                                            <div class="alert alert-danger">
                                                La confirmacion de compra se enviara a:
                                                <?php print_r($correo.", "); ?>
                                                Y sera enviada a la direccion registrada: 
                                                <?php print_r($direccion); ?>
                                            </div>
                                            <button class="back" onclick="location.href='index.php'">Regresar</button>
<?php
                                            include 'global/btncart.php'
?>
                                    </td>
                                    <td></td>
                                </tbody>
                            </table>
                        </div>
                    </section>
<?php 
                }
            else
                {
?>
                    <div class="alert alert-success">
                        No hay productos en el carrito.
                    </div>
<?php
                }
        }
    include('./templates/pie.php');
?>