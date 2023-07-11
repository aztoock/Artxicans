<?php 
        if(!@$_SESSION['user']){
        
        }
        else{
            $id_user = $_SESSION['id'];
            $query = mysqli_query($conn,"SELECT * FROM registro WHERE ID = '$id_user'");
            $res = mysqli_fetch_array($query);
          
          
            if($res['estatus'] == '1'){
    ?>
    <!-- esto vendra si es vendedor -->
    <p class="title-help">Ventas</p>
    <ul class="compras-help">
        <li><a data-bs-toggle="modal" data-bs-target="#ModalReportS">Reportar comprador <i class='bx bxs-chevron-right'> </i></a></li>
        <li><a href="./seller.php">Administrar publicaciones <i class='bx bxs-chevron-right'> </i></a></li>
        <li><a data-bs-toggle="modal" data-bs-target="#ModalQuestionS">Preguntas frecuentes sobre ventas <i class='bx bxs-chevron-right'> </i></a></li>
    </ul>
    <?php }else{}}?>