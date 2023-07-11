<?php
    include('./global/conexion.php');
    include('./templates/cabecera.php');
?>

<section class="help">
    <h2>¿En que podemos ayudarte? </h2>
    
    <p class="title-help">Compras</p>
    <ul class="compras-help">
    
        <li><a data-bs-toggle="modal" data-bs-target="#ModalReportU">Reportar vendedor o producto<i class='bx bxs-chevron-right'> </i></a></li>
        <li><a href="./orders.php">Administrar y cancelar compras<i class='bx bxs-chevron-right'> </i></a></li>
        <li><a data-bs-toggle="modal" data-bs-target="#ModalQuestion">Preguntas frecuentes sobre compras<i class='bx bxs-chevron-right'> </i></a></li>   
    </ul>

   <?php include('./helpers/help.php');?>

   <!-- Modal Reports -->
   
   <?php include('./components/ModalReportU.php')?>
   <?php include('./components/ModalReportS.php')?>
   
   <!-- Modal Question -->
  <?php include('./components/ModalQuestions.php')?>
  <!-- Modal Question Sellers -->
  <?php include('./components/ModalQuestionsS.php')?>

    <p class="title-help">Ayuda sobre tu cuenta</p>
    <ul class="compras-help">
        <li><a href="./profile.php"> Mi cuenta</a></li>
        <li><a data-bs-toggle="modal" data-bs-target="#ModalPrivacidad" >Aviso de privacidad</a></li>
        <li><a data-bs-toggle="modal" data-bs-target="#ModalPrivacidad" >Términos y condiciones</a></li>
        
    </ul>
    
</section>




<?php 
    include('./templates/pie.php');
?>