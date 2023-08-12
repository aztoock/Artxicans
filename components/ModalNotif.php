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
              <!-- NOTA:
                        1 comentario
                        2 producto
                        3 comentario en perfil
                        4 perfil de vendedor -->
              
            <form method="POST">
<?php
                  if ( $set_notif['tipo'] == 1 )
                    {
?>  
                      <div class="modal-footer">
                        <button type="button" class="btn btn-info" data-bs-dismiss="modal">Cerrar</button>
                      </div>
<?php
                    }
                  else if ( $set_notif['tipo'] == 2 )
                    {
?>  
                      <h2>Para iniciar una peticion de validacion de perfil:</h2>
                      <br>
                      <a>1. Actualiza la informacion de tu producto</a>
                      <br>
                      <a>2. Despues de actualizar la informacion del producto da clic en el boton revision. que esta mas abajo</a>

                      <div class="modal-footer">
                        <button type="button" class="btn btn-info" data-bs-dismiss="modal">Cerrar</button>
                        <!-- Boton para por si es un producto o perfil reportado -->
                        <input value="Revision" type="submit" name="update" class="btn btn-warning">
                      </div>
<?php
                    }
                  else if ( $set_notif['tipo'] == 3 )
                    {
?>  
                      <div class="modal-footer">
                        <button type="button" class="btn btn-info" data-bs-dismiss="modal">Cerrar</button>
                      </div>
<?php
                    }
                  else if ( $set_notif['tipo'] == 4 )
                    {
?>  
                      <h1>Para iniciar una peticion de validacion de perfil de vendedor:</h1>
                      <br>
                      <a>1. Actualiza la informacion de tu perfil de vendedor</a>
                      <br>
                      <a>2. Despues de actualizar la informacion del perfil da clic en el boton revision. que esta mas abajo</a>

                      <div class="modal-footer">
                        <button type="button" class="btn btn-info" data-bs-dismiss="modal">Cerrar</button>
                        <!-- Boton para por si es un producto o perfil reportado -->
                        <input value="Revision" type="submit" name="update" class="btn btn-warning">
                      </div>
<?php
                    }
?>
            </form><!-- Termina el Form -->
        </div>
    </div>
  </div>
</div>