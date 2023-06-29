<?php 
    include('./global/conexion.php');
    include('./templates/cabecera.php');
    if(@!$_SESSION['user']){
        echo("<script>location.href = 'login.php';</script>");
    }
?>
    <section class="notifications">
        <h2 align="center">Notificaciones</h2>
        
        <div class="table-notifications table-responsive">
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
        $query = mysqli_query($conn,"SELECT * FROM notifications WHERE ID_registro = $id_user");
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
      <td><?php echo $value['notification']?></td>
      <td><button type="button" class="btn btn-info">Detalles</button></td>
      
    </tr>
    <?php }}?>
  </tbody>
</table>
        </div>
    </section>

<?php 
    include('./templates/pie.php');
?>