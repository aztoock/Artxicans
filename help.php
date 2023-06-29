<?php
    include('./global/conexion.php');
    include('./templates/cabecera.php');
?>

<section class="help">
    <h2>¿En que podemos ayudarte? </h2>
    
    <p class="title-help">Compras</p>
    <ul class="compras-help">
    
        <li><a href="" >Reportar vendedor o producto<i class='bx bxs-chevron-right'> </i></a></li>
        <li><a href="">Administrar y cancelar compras<i class='bx bxs-chevron-right'> </i></a></li>
        <li><a href="">Preguntas frecuentes sobre compras<i class='bx bxs-chevron-right'> </i></a></li>   
    </ul>

    <!-- esto vendra si es vendedor -->
    <p class="title-help">Ventas</p>
    <ul class="compras-help">
        <li><a href="">Reportar comprador <i class='bx bxs-chevron-right'> </i></a></li>
        <li><a href="./seller.php">Administrar publicaciones <i class='bx bxs-chevron-right'> </i></a></li>
        <li><a href="">Preguntas frecuentes sobre ventas <i class='bx bxs-chevron-right'> </i></a></li>
    </ul>

    <p class="title-help">Ayuda sobre tu cuenta</p>
    <ul class="compras-help">
        <li><a href="./profile.php"> Mi cuenta</a></li>
        <li><a data-bs-toggle="modal" data-bs-target="#ModalPrivacidad" >Aviso de privacidad</a></li>
        <li><a data-bs-toggle="modal" data-bs-target="#ModalPrivacidad" >Términos y condiciones</a></li>
        <li><a href="">Seguridad</a></li>
    </ul>
</section>




<?php 
    include('./templates/pie.php');
?>