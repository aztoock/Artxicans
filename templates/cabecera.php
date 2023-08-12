<!DOCTYPE html>
<?php  session_start(); ?>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0"
    />
    <!-- Para el crawler del navegador-->
    <meta name="robots" content="index.follow" />
    <meta name="keyword" content="artesanias, handicraft, mexican, mexico," />
    <meta name="description" content="Artesanias Mexicanas" />
    
    
    <!-- Styles -->
   
    <link rel="stylesheet" href="./styles/bootstrap-5.2.3-dist/css/bootstrap.min.css"> 
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    /> 
    <link rel="stylesheet" href="styles/pages/signup-login.css?v=2" />
    <link rel="stylesheet" href="./styles/home/products.css?v=2">
    <link rel="shortcut icon" href="assets/logo/a.png" />
    <!-- <link rel="stylesheet" href="./styles/home/carousel.css?v=2" /> -->
    <link rel="stylesheet" href="./styles/home/searchbox.css?v=2" />
    <link rel="stylesheet" href="./styles/footer/footer.css?v=2" />
    <link rel="stylesheet" href="./styles/home/main.css?v=2" />
    <link rel="stylesheet" href="./styles/header/header.css?v=2" />
    <link rel="stylesheet" href="./styles/pages/products.css?v=2" />
    <link rel="stylesheet" href="./styles/pages/sellers.css?v=2" />
    <link rel="stylesheet" href="./styles/pages/reg_seller.css?v=2" />
    <link rel="stylesheet" href="./styles/pages/categories.css?v=2" />
    <link rel="stylesheet" href="./styles/pages/help.css?v=2" />
    <link rel="stylesheet" href="./styles/pages/profile.css?v=2" />
    <link rel="stylesheet" href="./styles/pages/chats.css?v=2" />
    <link rel="stylesheet" href="./styles/pages/about.css?v=2" />
    <link rel="stylesheet" href="./styles/pages/orders.css?v=2" />
    <link rel="stylesheet" href="./styles/pages/cart.css?v=2" />
  <!--   <link rel="stylesheet" href="./styles/header/header2.css?v=2" /> -->
    <link rel="stylesheet" href="index.css?v=2" />
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    
    <!-- GoogleIcons -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"
    />
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
   

    <title>Artxicans</title>
  </head>
  <body>
   
    <!-- Header and Navbar -->
    <nav class="navigation">
        <div class="nav-bar logo">
            <i class='bx bx-menu sidebarOpen' ></i>
            <a href="index.php"> <img src="./assets/logo/3.png"  "/> </a>

            <div class="menu">
                <div class="logo-toggle">
                    <span class="logo"><a href="#">Artxicans</a></span>
                    <i class='bx bx-x siderbarClose'></i>
                </div>

                <ul class="nav-links">
                    <li><a href="index.php">Inicio</a></li>
                    <li>
                        <a  href="categories.php"
                            >Categorías</a>
                        <!--   <ul class="dropdown-menu">
                                <li><a href="" class="dropdown-item">Alebrijes</a></li>
                                <li><a href="" class="dropdown-item">Arte Huichol</a></li>
                                <li><a href="" class="dropdown-item">Ropa</a></li>
                                <li><a href="" class="dropdown-item">Otros</a></li>
                            </ul> -->
                </li>
                    <li><a href="helpers/validate-seller.php">Vender</a></li>
                    
                    <li><a href="help.php">Ayuda</a></li>
                    <li><a data-bs-toggle="modal" class="idioma" data-bs-target="#translateModal" style="cursor:pointer;">Idioma</a></li>
                    <li class="navItem"><a href="cart.php" class="position-relative"><i class='bx bxs-cart bx-sm' >
              
              </i>
               <span class="position-absolute top-0 right-0 start-100 translate-middle badge rounded-pill bg-danger" style="margin-top:0.4rem;">
        <?php echo (empty($_SESSION['cart']))?0: count($_SESSION['cart']); ?>
      <span class="visually-hidden">unread messages</span>
    </span>
             
      <!-- (<?php echo (empty($_SESSION['cart']))?0: count($_SESSION['cart']); ?>) --></a></li>
                
                  </ul>
            </div>

            <div class="darkLight-searchBox">
                <a href="./profile.php" class="dark-light">
                  <i class='bx bxs-user-circle'></i>
                </a>

                <div class="searchBox">
                   <div class="searchToggle">
                    <i class='bx bx-x cancel'></i>
                    <i class='bx bx-search search'></i>
                   </div>

                    <form class="search-field" action="search.php" method="GET" >
                        <input type="text" placeholder="Buscar" name="fetch">
                        <button class="searchButton">
                        <i type="submit" class='bx bx-search' style="margin-top:46px"></i>
</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>




    <!-- Modal --> 
    <div class="modal fade" id="translateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Idioma</h1>
      </div>
      <div class="modal-body">
          <div class="traducir" id="traducir"></div>
          <style>
        .skiptranslate {
           font-size: 0 !important;
        }
          </style>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-bs-dismiss="modal">Aceptar</button>
        
      </div>
    </div>
  </div>
</div>

