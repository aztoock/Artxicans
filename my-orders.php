<?php 
    include('./global/conexion.php');
    include('./templates/cabecera.php');
?>
    <section class="my-orders">
        <h2 align="center">Mis Pedidos</h2>
        <div class="order-seller-table">
        <table class="table table-responsive">
            <thead>
                <!-- No se que vayas a poner aqui en esta tabla entonces te la dejo estatico para que 
                puedes washar  que poner, dependiendo que hayas puesto en la tabla de pedido-->
                <tr>
                <th scope="col">#</th>
                <th scope="col">Producto</th>
                <th scope="col">Fecha</th>
                <th scope="col">Detalles</th>
                
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr>
                <th scope="row">1</th> 
                <td>hola</td>
                <td><button type="button" class="btn btn-info">Detalles</button></td>
                </tr>
            </tbody>
</table>
        </div>
    </section>

<?php 
    include('./templates/pie.php');
?>