<?php
  
  include 'global/conexion.php';
  include 'templates/cabecera.php';
  if(!isset($_GET['fetch'])){
    echo("<script>location.href = 'index.php';</script>");
  }
?>

    
    <!-- Modal user-mobile -->
<!--     <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Mi Cuenta</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
           <div class="mobs">
            <button class="btn-mob-1" onclick="location.href='pages/login.php'">Inicio de sesion</button>
            <button class="btn-mob-2" onclick="location.href='pages/signup.php'">Regístrate</button>
          </div>
          </div>
          
        </div>
      </div>
    </div> -->
    <!-- Aqui empieza el body -->

    <!-- SearchBox -->
    <form class="search-field" action="search.php" method="GET" >
                        <input type="text" placeholder="Buscar" name="fetch">
                        <button class="searchButton">
                        <i type="submit" class='bx bx-search' style="margin-top:46px"></i>
</button>
                    </form>

   <!-- LIST OF PRODUCTS -->
<!-- Choose -->
<div class="d-grid gap-2 d-md-flex justify-content-start cat" style="margin-top:2rem">
  <button class="btn btn-secondary me-md-2 mb-2 mt-5 categories-btn" type="button" onclick="location.href='categories.php'"><img src="./assets/utilities/categorias.png" class="categories-icon" alt="categories-icon"> Ir a categorías</button>
</div>

   <section class='container-products'>
  
   <div class='mainContent grid'>    
   <?php 
        $result = $conn ->query("SELECT * FROM products WHERE product like  '%".$_GET['fetch']."%' or
        description like '%".$_GET['fetch']."%' or
        category like '%".$_GET['fetch']."%' 

        order by id_product DESC limit 20")or die ($conn ->error);

        if($result->num_rows > 0){
        while($row = mysqli_fetch_array($result)){
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
                <!--  <div className="">
                            <span>Estrellas</span>
                            <span>120</span>
                        </div>
                        <span className="">Vendido por:</span><span className="">Said Castillo</span> 
            </div> -->
            </div>
           </a>
        </div>
        <?php }
        }else{?>

<div class="m-0  row justify-content-center align-items-center mt-3">
                                <div class="alert alert-dark text-center p-5 col-auto" role="alert">
                                    Sin resultados 
                                </div>
                            </div>
          <?php }?>
      </div>
    </section>
    
<!--  -->

   
<?php 
  include('templates/pie.php');
?>