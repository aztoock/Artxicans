<?php 
include('global/conexion.php');
include('templates/cabecera.php');
?>

<section class="categorias"> 
<h2>Lista de Categorias</h2>

<div class="grid-responsive">

<a href="pcategoria.php?op=Alebrije" class="cat-item">
    <div class="overlay-cat"></div>
        <img src="./assets/utilities/alebrijes.jpg" alt="alebrijes" >
    <div class="cat-container">
        <div class="textCat">
            <h3 class="catTitle">Alebrijes</h3>
        </div>
    </div>
</a>
<a href="pcategoria.php?op=Huichol" class="cat-item">
    <div class="overlay-cat"></div>
        <img src="./assets/utilities/huichol.jpg" alt="alebrijes" >
    <div class="cat-container">
        <div class="textCat">
            <h3 class="catTitle">Arte Huichol</h3>
        </div>
    </div>
</a>
<a href="pcategoria.php?op=Juguetes" class="cat-item">
    <div class="overlay-cat"></div>
        <img src="./assets/utilities/juguetes.jpg" alt="alebrijes" >
    <div class="cat-container">
        <div class="textCat">
            <h3 class="catTitle">Juguetes</h3>
        </div>
    </div>
</a>
<a href="pcategoria.php?op=Joyeria" class="cat-item">
    <div class="overlay-cat"></div>
        <img src="./assets/utilities/joyeria.jpg" alt="alebrijes" >
    <div class="cat-container">
        <div class="textCat">
            <h3 class="catTitle">Joyeria</h3>
        </div>
    </div>
</a>
<a href="pcategoria.php?op=Ropa" class="cat-item">
    <div class="overlay-cat"></div>
        <img src="./assets/utilities/ropa.jpg" alt="alebrijes" >
    <div class="cat-container">
        <div class="textCat">
            <h3 class="catTitle">Ropa</h3>
        </div>
    </div>
</a>
<a href="pcategoria.php?op=Rebozos" class="cat-item">
    <div class="overlay-cat"></div>
        <img src="./assets/utilities/rebozos.jpg" alt="alebrijes" >
    <div class="cat-container">
        <div class="textCat">
            <h3 class="catTitle">Rebozos</h3>
        </div>
    </div>
</a>
<a href="pcategoria.php?op=Sombrero" class="cat-item">
    <div class="overlay-cat"></div>
        <img src="./assets/utilities/sombrero.jpg" alt="alebrijes" >
    <div class="cat-container">
        <div class="textCat">
            <h3 class="catTitle">Sombreros</h3>
        </div>
    </div>
</a>
<a href="pcategoria.php?op=Zapatos" class="cat-item">
    <div class="overlay-cat"></div>
        <img src="./assets/utilities/zapts.jpg" alt="Zapatos" >
    <div class="cat-container">
        <div class="textCat">
            <h3 class="catTitle">Zapatos</h3>
        </div>
    </div>
</a>
<a href="pcategoria.php?op=Otros" class="cat-item">
    <div class="overlay-cat"></div>
        <img src="./assets/utilities/bg_colors.jpg" alt="Otros" >
    <div class="cat-container">
        <div class="textCat">
            <h3 class="catTitle">Otros</h3>
        </div>
    </div>
</a>


</div>


</section>




<?php 
 include('templates/pie.php');
?>