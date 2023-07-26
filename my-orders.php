<?php 
    include('./global/conexion.php');
    include('./templates/cabecera.php');
    include('./helpers/loader.php');
    if(!@$_SESSION['user']){ 
        echo("<script>location.href = '../index.php';</script>");  
    }
    $id_user = $_SESSION['id'];
?>
    <section class="my-orders">
        <h2 align="center">Mis Pedidos</h2>
        <div class="order-seller-table row d-flex justify-content-center">
        <table class="table table-responsive w-75">
            <thead>
                <!-- No se que vayas a poner aqui en esta tabla entonces te la dejo estatico para que 
                puedes washar  que poner, dependiendo que hayas puesto en la tabla de pedido-->
                <tr>
                
                <th scope="col">Pedido</th>
                <th scope="col">Fecha</th>
                <th scope="col">Estatus</th>
                <th scope="col">Detalles</th>
                
                </tr>
            </thead>
            <tbody class="table-group-divider">
            <?php 
             /* Obtenemos datos de la tabla ventas, mostraremos solo los datos que tienen como estatus completo
             luego para obtener los datos del producto y que sean datos del usuario que esta en session, unimos las otras dos
             tablas "detalleventa y products" para mostrar los datos del producto */
                $query = mysqli_query($conn,"SELECT * FROM ventas INNER JOIN detalleventa ON 
                ventas.id_venta = detalleventa.id_venta INNER JOIN products ON
                detalleventa.id_producto = products.id_product WHERE ventas.estatus = 'completo'
                AND products.ID_registro = '$id_user'
                ORDER BY ventas.id_venta DESC");
                while($data = mysqli_fetch_row($query)){
                   
        
              
            ?>
            
                <tr>
                <?php 
                    $estatus = $data[7];
                    if($estatus == 'Pendiente'):
                ?>    
                <td>Pedido Nuevo</td>
                <?php elseif ($estatus == 'Enviado'):?>
                <td>Pedido en Proceso</td>
                <?php else:?>
                <td>Pedido Completado</td>
                <?php endif?>
                <td><?php echo $data[3]?></td>
                <td><?php echo $data[7]?></td>
                <td><button type="button" class="btn btn-info" onclick="location.href='./single-order.php?venta=<?php echo base64_encode($data[0]);?>'">Detalles</button></td>
                </tr>

            <?php 
                 }
            ?>
            </tbody>
</table>
        </div>
    </section>

<?php 
    include('./templates/pie.php');
?>