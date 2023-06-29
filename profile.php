
<?php
    include('./global/conexion.php');
    include('./templates/cabecera.php');
    if(@!$_SESSION['user']){
      echo("<script>location.href = 'login.php';</script>");
  }
    $id_user = $_SESSION['id']; 
?>

    
    <section>
      <div class="usuario">
        
        <h3>Cuenta:&nbsp;</h3>
        <h3 class="usuario-bold"><?php echo $_SESSION['user'];?></h3>&nbsp;&nbsp;
        <div class="img-profile">
        <img src="./assets/utilities/usuario.png" alt="user" style="width:40px;heigth:50px">
        </div>
      </div>
        
        <div class="d-grid gap-2 col-6 mx-auto">
      <?php 
        $query = mysqli_query($conn,"SELECT * FROM registro WHERE ID = '$id_user'");
        $res = mysqli_fetch_array($query);
              
        if($res['estatus'] == '1'){
      ?>
      <!-- Boton para perfil de vendedor -->
      <button type="button" class="btn btn-outline-primary" onclick="location.href='./profile-seller.php?seller_data=<?php echo $id_user?>'">Perfil de vendedor</button>   
      <?php }?>   
      <!-- Boton para notificaciones -->
      <button type="button" class="btn btn-info position-relative mt-4" onclick="location.href='./notifications.php'">
          Notificaciones
          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
          <?php 
            # Contamos todos las notificaciones del usuario
            $query2 = mysqli_query($conn,"SELECT COUNT(*) total FROM notifications WHERE ID_registro = $id_user");
            $data2 = mysqli_fetch_array($query2);
            echo $data2['total'];
          ?> 
          <span class="visually-hidden">unread messages</span>
          </span>
      </button>
   <button class="btn btn-outline-success mt-4" type="button">Editar datos</button>
  <button class="btn btn-danger mt-4" type="button" onclick="location.href='./global/logout.php'">Cerrar Sesion</button>
          
</div>
    </section>


<?php include('./templates/pie.php');?>