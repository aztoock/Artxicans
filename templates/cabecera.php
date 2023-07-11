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
    <link rel="stylesheet" href="./styles/pages/cart.css?v=2" />
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
    <header class="header">
      <nav class="navigation">
        <div class="logo">
          <a href="index.php"> <img src="./assets/logo/3.png"  "/> </a>
        </div>
        <button class="burger-btn">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="30"
            height="30"
            viewBox="0 0 24 24"
          >
            <path d="M4 6H20V8H4zM4 11H20V13H4zM4 16H20V18H4z" />
          </svg>
          <svg
            class="none"
            xmlns="http://www.w3.org/2000/svg"
            width="30"
            height="30"
            viewBox="0 0 24 24"
          >
            <path
              d="M16.192 6.344L11.949 10.586 7.707 6.344 6.293 7.758 10.535 12 6.293 16.242 7.707 17.656 11.949 13.414 16.192 17.656 17.606 16.242 13.364 12 17.606 7.758z"
            />
          </svg>
        </button>
        <div class="navbar" id="navbar">
          <ul class="navList">
            <li class="navItem"><a href="index.php">Inicio</a></li>
            <li class="navItem dropdown set-categories">
              <a
                href=""
                class="dropdown-toggle"
                data-bs-toggle="dropdown"
                aria-expanded="false"
                >Categorias</a
              >
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="pcategoria.php?op=Alebrije">Alebrijes</a></li>
                <li><a class="dropdown-item" href="pcategoria.php?op=Huichol">Arte Huichol</a></li>
                <li><a class="dropdown-item" href="pcategoria.php?op=Juguetes">Juguetes</a></li>
                <li><a class="dropdown-item" href="pcategoria.php?op=Joyeria">Joyeria</a></li>
                <li><a class="dropdown-item" href="pcategoria.php?op=Ropa">Ropa</a></li>
                <li><a class="dropdown-item" href="pcategoria.php?op=Rebozos">Rebozos</a></li>
                <li><a class="dropdown-item" href="pcategoria.php?op=Sombrero">Sombreros</a></li>
                <li><a class="dropdown-item" href="pcategoria.php?op=Zapatos">Zapatos</a></li>
                <li><a class="dropdown-item" href="pcategoria.php?op=Otros">Otros...</a></li>
                
              </ul>
            </li>
            <li class="navItem mob-categories"><a href="categories.php">Categorias</a></li>
            <li class="navItem"><a href="cart.php">Carrito(<?php echo (empty($_SESSION['cart']))?0: count($_SESSION['cart']); ?>)</a></li>
            <li class="navItem"><a href="helpers/validate-seller.php">Vender</a></li>
            <li class="navItem"><a href="help.php">Ayuda</a></li>
            <li class="navItem"><a data-bs-toggle="modal" data-bs-target="#translateModal" style="cursor:pointer;">Idioma</a></li> 
            <?php if(@!$_SESSION['user']){?>
            <div class="headerBtn">
              
              <button class="loginBtn" onclick="location.href='login.php'">
                <a>Ingresa</a>
              </button>
              
              <button class="btn-header2 signBtn" onclick="location.href='signup.php'">
                <a>Regístrate</a>
              </button>
            </div>
            <?php }else{?>

              <a href="profile.php" class="cuenta" style="display:flex;align-items:cneter;justify-content:center;">
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="25" fill="#ffff" style="cursor:pointer;"  class="bi bi-person-fill" viewBox="0 0 16 16">
                  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
              </svg>              
              </a>
              <style>.cuenta{color:black; font-size:0.9rem; background:var(--second-alpha-color); padding:0 0.4rem; border-radius:10px}</style>
              <?php }?>
          </ul>
        </div>
      </nav>
    </header>







    <!-- Modal --> 
    <div class="modal fade" id="translateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
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


  