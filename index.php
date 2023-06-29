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
            <?php if(isset($_SESSION['user'])){ ?>
               <div class="go-profile">
                <button class="btn-mob-profile" onclick="location.href='profile.php'">Mi perfil</button>
            </div>
            
          <?php }else{?>
        <div class="mobs">
            <button class="btn-mob-1" onclick="location.href='login.php'">Inicio de sesion</button>
            <button class="btn-mob-2" onclick="location.href='signup.php'">Regístrate</button>
          </div>
          <?php }?>
          </div>
          
        </div>
      </div>
    </div>
    <!-- Aqui empieza el body -->

    <!-- SearchBox -->
    <form action="search.php" class="searchContainer" method="GET" id="searchContainer">
      <div class="searchBox">
        <input type="search" name="fetch" class="searchInput mb-btn" placeholder="Buscar" />
      
          <button class="searchButton"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="18" fill="#6669c5" style="font-size:bold;" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg> </button>
      </div>
      <div class="user">
        <a data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
          <img src="./assets/utilities/usuario.png" alt="icon" class="icon" />
        </a>
      </div>
    </form>

<!-- Choose -->
<div class="d-grid gap-2 d-md-flex justify-content-start cat">
  <button class="btn btn-secondary me-md-2 mb-2 mt-5 categories-btn" type="button" onclick="location.href='categories.php'"><img src="./assets/utilities/categorias.png" class="categories-icon" alt="categories-icon"> Ir a categorias</button>
  
</div>



  
   <!-- LIST OF PRODUCTS -->

   <section class='container-products' id="container-products">
  
   <div class='mainContent grid' id="mainContent">    
   <?php 
         $result = $conn ->query("SELECT * FROM products WHERE stock > 0 ORDER BY rand() LIMIT 8") or die ($conn->error);
         while($row = mysqli_fetch_assoc($result)){
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
        <?php 
          $id = $row['id_product'];

      }?>
        
      </div>
      <!-- Loader -->
      <div class="d-flex justify-content-center">
        <div class="spinner-border text-warning"  style="width: 3rem; height: 3rem;" id="loader" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>  
      </div>
      <!-- Loader Finish -->

      <div id="id-load" class="load-more">
        <button id="load-more" data-id="<?php echo $id;?>">Ver más</button>
    </div>
    </section>
    
 

   
<?php 
  include('templates/pie.php');
?>