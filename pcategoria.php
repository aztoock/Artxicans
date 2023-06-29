<?php
  include 'global/conexion.php';
  include 'templates/cabecera.php';
?>
    <!-- Modal user-mobile -->
    <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Mi Cuenta</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
           <div class="mobs">
            <button class="btn-mob-1" onclick="location.href='login.php'">Inicio de sesion</button>
            <button class="btn-mob-2" onclick="location.href='signup.php'">Regístrate</button>
          </div>
          </div>
          
        </div>
      </div>
    </div>
    <!-- Aqui empieza el body -->

    <!-- Choose -->
<div class="d-grid gap-2 d-md-flex justify-content-start cat">
  <button class="btn btn-secondary me-md-2 mb-2 mt-5 categories-btn" type="button" onclick="location.href='categories.php'"><img src="./assets/utilities/categorias.png" class="categories-icon" alt="categories-icon"> Ir a categorias</button>
  
</div>
   <!-- LIST OF PRODUCTS -->
  <section class='container-products'>
    <div class='mainContent grid'>
      <?php
      if (isset($_GET['op']))   # se obtiene la opcion desde cabecera.php
          {
            $opcion = $_GET['op'];  # se iguala la variable opcion al dato obtenido
            $query = "SELECT * FROM `products` WHERE category = '$opcion' AND stock > 0 ORDER BY rand() LIMIT 12";
              # Query que obtiene los datos segun la opcion elejida
            $result = $conn ->query($query) or die ($conn->error);
              # obtenemos el valor de la consulta
            if ( $result->num_rows == 0 )
              {
      ?>       
                <div class="alert alert-danger">No hay productos por el momento</div>
      <?php   }
            else
              {
                while($row = mysqli_fetch_array($result)) # ciclo para mostrar los datos
                  {
      ?>
                    <div class="single-product">
                      <a href="product.php?id_product=<?php echo $row['id_product'];?>" class='referencia'>
                        <div class='imgDiv'>
                            <img src="assets/products/<?php echo $row['image1'];?>"  alt="<?php echo $row['product']?>">
                        </div>
                        <div class="card-info">
                          <span class="product-title"><?php echo $row['product'];?></span>
                          <span class="price">$<?php echo $row['price'];?></span>
                          <span class="shipping">Más envio de importación</span>
                        </div>
                      </a>
                    </div>
      <?php       }?>
      <?php   }?>
    <?php }?>
    </div>
  </section>
<!--  -->
<?php 
  include('templates/pie.php');
?>