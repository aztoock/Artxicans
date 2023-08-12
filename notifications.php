<?php 
    include('./global/conexion.php');
    include('./templates/cabecera.php');
    include('./helpers/loader.php');
    if(@!$_SESSION['user']){
        echo("<script>location.href = 'login.php';</script>");
    }
?>
    <section class="notifications " style="margin-top:4.5rem">
        <h2 align="center">Notificaciones</h2>
        
        <div class="table-notifications table-responsive">
<?php 
   $id_user = $_SESSION['id'];
   $check_notif = mysqli_query($conn,"SELECT * FROM notifications WHERE ID_registro = $id_user");
   if($check_notif->num_rows > 0){
?>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Notificación</th>
      <th scope="col">Detalles</th>
      
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <?php 
        $id_user = $_SESSION['id'];
        # Consulta para obtener todas las notificaciones del usuario en session
        $query = mysqli_query($conn,"SELECT * FROM notifications WHERE ID_registro = $id_user ");
        while($data = mysqli_fetch_array($query)){ 
   ?>
    <tr>

       <?php  
         /* 
            Esto es un contador, para ir contando cada notificacion del usuario.
            $query es el array que tenemos de las notificaciones, 
            $counter es el contador
         */
        foreach ($query as $key => $value){
           if(!isset($counter)) 
           {
               $counter = 0;
           }
           $counter++;
        ?>
      <th scope="row"><?php 
      echo $counter; ?> </th> 
      <td><?php echo $value['titulo']?></td>
      <td><button type="button" class="btn btn-info"  data-bs-toggle="modal" data-bs-target="#ModalNotif<?php echo $value['id_notif']?>">Detalles</button></td>
            <!-- Modal  Notifications-->
           <?php include('./components/ModalNotif.php');?>
    </tr>
    <?php }}?>
  </tbody>
</table>
          <?php }else{?>
            <div class="m-0  row justify-content-center align-items-center mt-3">
                                <div class="alert alert-dark text-center p-5 col-auto" role="alert">
                                    Sin notificaciones
                                </div>
                            </div>

          <?php }?>  
          <center class="mt-3">
                    <button class="btn btn-secondary" onclick="location.href='profile.php'">Regresar</button>
                </center>
        </div>
    </section>

<?php 
    include('./templates/pie.php');
?>