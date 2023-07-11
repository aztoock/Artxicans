<?php 
include('./global/conexion.php');
include('./templates/cabecera.php');

$id_u = $_SESSION['id'];
$query = mysqli_query($conn,"SELECT * FROM products INNER JOIN detalleventa 
                            ON products.id_product = detalleventa.id_producto INNER JOIN ventas ON
                            detalleventa.id_venta = ventas.id_venta WHERE detalleventa.ID_registro = $id_u");

?>
<section class="orders">
    <h2 align="center">Mis pedidos</h2>
    <?php 
        if($query->num_rows > 0){
    ?>
    <div class="table-responsive-lg ">
                            <table class="table table-striped mt-3 p-2 cart-table-1">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">Producto</th>
                                        <th scope="col">Cantidad</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Fecha</th>
                                        <th scope="col">Estatus</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                    
                                    while($row = mysqli_fetch_array($query)){
                                        $estatus = $row['estatus'];
                                        if($estatus == 'completo'){
                                        $cantidad = $row['cantidad'];
                                        $precio = $row['preciounitario'];
                                        $total = $precio * $cantidad; 
                                ?>
                                    <tr>
                                        <td scope="row"><?php echo $row['product']?></td>
                                        <td scope="row"><?php echo $cantidad?></td>
                                        <td scope="row"><?php echo $total?></td>
                                        <td scope="row"><?php echo $row['fecha']?></td>
                                        <td scope="row"><?php echo $row['envio']?></td>
                                        
                                    </tr>
                                 <?php } }?>
                                   
                                </tbody>
                            </table>
                        </div>
                        <?php }else{?>
                            <div class="m-0  row justify-content-center align-items-center mt-3">
                                <div class="alert alert-dark text-center p-5 col-auto" role="alert">
                                    No tienes pedidos en proceso, accede a la <a href="./index.php" class="alert-link">Lista de productos</a>
                                </div>
                            </div>

                        <?php }?>
                <center class="mt-3">
                    <button class="btn btn-secondary" onclick="location.href='profile.php'">Regresar</button>
                </center>
</section>
<?php 
include('./templates/pie.php');
?>