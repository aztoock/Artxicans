<?php 
    include('./templates/cabecera.php');
    include('./global/conexion.php');  
    if(@!$_SESSION['roll']){
      echo("<script>location.href = './index.php';</script>");
    } 
    $id_user = $_SESSION['id'];
    $query = mysqli_query($conn,"SELECT * FROM products WHERE ID_registro = $id_user");
     
?>
<div class="t-p-seller"> 
 
<?php 
    if($query->num_rows > 0){

?>

<div class="prod-btns">
<button type="button" class="btn btn-secondary" onclick="location.href='./seller.php'">Regresar</button>
<button type="button" class="btn btn-info" onclick="location.href='./add-product.php'">Agregar producto&nbsp; <i class='bx bxs-add-to-queue'></i></button>
</div>

<!-- <div class="d-grid gap-2 col-10 mx-auto">
  <button class="btn btn-info" type="button" onclick="location.href='./add-product.php'">Agregar nuevo producto</button>
  
</div> -->
<table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Productos</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
  <?php 
    while($row = mysqli_fetch_array($query)){
  ?>
    <tr>
      <th scope="row"><img src="./assets/products/<?php echo $row['image1']?>" alt="product" style="width:30px;heigth:30px"></th>
      <td><?php echo $row['product']?></td>
      <td class="edit-button"><i data-bs-toggle="modal"  data-bs-target="#EditModal-<?php echo $row['id_product']?>" class='bx bxs-edit-alt bx-sm' ></i></td>
      <td class="delete-button"><i data-bs-toggle="modal" data-bs-target="#delete-product-<?php echo $row['id_product']?>" class='bx bxs-x-circle bx-sm'></i></td>
    </tr>

<!-- Edit modal -->
<div class="modal fade" id="EditModal-<?php echo $row['id_product']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar producto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    <form action="./helpers/edit-product.php?id_product=<?php echo $row['id_product']?>" method="POST" enctype="multipart/form-data">
   
      <div class="mb-3">
        <label for="producto" class="form-label">Producto</label>
        <input type="text" class="form-control" id="producto" name="producto" value="<?php echo $row['product']?>">
      </div>
      <div class="mb-3">
        <label for="precio" class="form-label">Precio</label>
        <input type="text" class="form-control" id="precio" name="precio" value="<?php echo $row['price']?>">
      </div>
      <div class="mb-3">
        <label for="descripcion" class="form-label">Descripción</label>
        <textarea class="form-control" id="descripcion" name="descripcion" rows="3" maxlength="100"><?php echo $row['description']?> </textarea>
      </div>
      <div class="mb-3">
        <label for="cantidad" class="form-label">Cantidad</label>
        <input type="number" class="form-control" id="cantidad" name="cantidad" value="<?php echo $row['stock']?>">
      </div>
     
      <div class="mb-3">
        <label for="categoria" class="form-label">Categoria</label>
        <select name="categoria" class="form-select" aria-label="Default select example">
          <option selected><?php echo $row['category']?></option>
          <option value="Alebrijes">Alebrijes</option>
          <option value="Huichol">Arte Huichol</option>
          <option value="Juguetes">Juguetes</option>
          <option value="Joyeria">Joyeria</option>
          <option value="Ropa">Ropa</option>
          <option value="Rebozos">Rebozos</option>
          <option value="Sombreros">Sombreros</option>
          <option value="Zapatos">Zapatos</option>
          <option value="Otros">Otros...</option>
          
        </select>  
      </div>
      <div class="mb-3">
        <label for="imagen1" class="form-label">Imagen 1</label>
        <input class="form-control" type="file" id="imagen1" name="imagen1"><span><?php echo $row['image1']?></span>
      </div>
      <div class="mb-3">
        <label for="imagen2" class="form-label">Imagen 2</label>
        <input class="form-control" type="file" id="imagen2" name="imagen2"><span><?php echo $row['image2']?></span>
      </div>
      <div class="mb-3">
        <label for="imagen3" class="form-label">Imagen 3</label>
        <input class="form-control" type="file" id="imagen3" name="imagen3"><span><?php echo $row['image3']?></span>
      </div>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <input type="submit" name="send-edit" class="btn btn-primary" value="Guardar cambios">
       
      </div>
    </form>
    </div>
  </div>
</div>
<!-- End edit modal -->


<!-- Delete modal -->

<div class="modal fade" id="delete-product-<?php echo $row['id_product']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar producto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      ¿Estás seguro de que deseas eliminar tu producto?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-danger" onclick="location.href='./helpers/delete-product.php?id=<?php echo $row['id_product']?>'">Eliminar</button>
      </div>
    </div>
  </div>
</div>

<!-- End delete modal -->



    <?php }?>
    
  </tbody>
</table>

<?php }else{?>

<div class="alert alert-warning" role="alert">
  Aun no tienes un producto activo presiona <a href="#" class="alert-link">Agregar producto</a> para registrar alguno de tus productos.
</div>
<?php }?>
   
</div>


<?php 
    include('./templates/pie.php');
?>