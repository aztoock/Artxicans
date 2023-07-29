<div class="modal fade" id="ModalNotif<?php echo $value['id_notif']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Notificación</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <div class="alert alert-light" role="alert">
            <?php
            # Obtenemos el id de la notificacion
            $notif = $value['id_notif'];
            # Consulta para obtener la notificacion que se selecciono por el id
            $get_notif = mysqli_query($conn,"SELECT * FROM notifications WHERE id_notif = '$notif'");
            $set_notif = mysqli_fetch_array($get_notif);
           
            # Imprimimos la notificacion en el body del modal
                echo $set_notif['notification'];
            ?>
            </div>
           
            <!-- Para cuando son productos o perfiles reportados -->
            <!-- Productos -->      
            <form method="POST">
                <!-- Por si se tiene que cambiar el Nombre, precio -->
                <div class="input-group ">
                <!-- <label for="exampleFormControlTextarea1" class="form-label">Label de campo(Opcional)</label> -->
                    <input type="text" class="form-control" placeholder="Nombre" aria-label="Nombre" aria-describedby="basic-addon1">
                </div>
                <!-- Por si se tiene que cambiar la descripcion -->
                <div class="mb-3">
                    <!-- <label for="exampleFormControlTextarea1" class="form-label">Label de Campo(Opcional)</label> -->
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <!-- Por si se tiene que cambiar una imagen -->
                <div class="mb-3">
                    <!-- <label for="formFile" class="form-label">Opcional</label> -->
                    <input class="form-control" type="file" id="formFile">
                </div>

                <!-- Perfil-->
                <!-- Nombre, y no se me ocurre que otra cosa tenga que cambiar un perfil de vendedor -->
                <div class="input-group mb-2">
                    <input type="text" class="form-control" placeholder="Nombre" aria-label="Nombre" aria-describedby="basic-addon1">
                </div>

            

        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-bs-dismiss="modal">Cerrar</button>
      <!-- Boton para por si es un producto o perfil reportado -->
        <input value="Actualizar" type="submit" name="update" class="btn btn-warning">
       
    
    </form><!-- Termina el Form -->
      </div>
    </div>
  </div>
</div>