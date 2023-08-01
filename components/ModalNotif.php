<?php
  if (isset($_POST['update2']))
    {
      $id_notif = $_POST['id_notif'];
      $updatetipo = ("UPDATE `notifications` SET `tipo` = '0' WHERE `notifications`.`id_notif` = $id_notif");
          # Se cambia el estatus de la tabla reportes(reports)
      $result = mysqli_query($conn,$updatetipo);

        #obtenemos el id de resgistro del usuario al que le pertenece la notificacion
      $notifications= mysqli_query($conn,"SELECT * FROM notifications WHERE id_notif = $id_notif");
      $values = mysqli_fetch_array($notifications);
      $usuario = $values['ID_registro'];
      #echo $usuario;
          #con ayuda de la anterior consulta obtenemos el id del reporte al que le pertenece a ese usuario
          #con ayuda de un while recorremos los resultados en caso de que un solo usuario tenga varios reportes activos o no
      $report = mysqli_query($conn,"SELECT * FROM reports  WHERE seller = $usuario");
      while ($row = mysqli_fetch_array($report)) 
        {
          $estatus = $row['estatus'];
          if ( $estatus == 2 )  # si es estatus del reporte es 2
            {
                #obtenemos los datos del reporte como del producto reportado
              $idreport = $row['id_report'];
              $idproduct = $row['id_product'];
                #seteamos la notificacion del administrador para que se muestre que ya hay un nuevo estatus a verificar
              $updateestatus = ("UPDATE `reports` SET `estatus` = '3' WHERE `id_report` = $idreport AND `id_product` = $idproduct");
                # Se cambia el estatus de la tabla reportes(reports)
              $result = mysqli_query($conn,$updateestatus);
            }
        }
    }
  else if (isset($_POST['update4']))
    {
      $id_notif = $_POST['id_notif'];
      $updatetipo = ("UPDATE `notifications` SET `tipo` = '0' WHERE `notifications`.`id_notif` = $id_notif");
          # Se cambia el estatus de la tabla reportes(reports)
      $result = mysqli_query($conn,$updatetipo);

        #obtenemos el id de resgistro del usuario al que le pertenece la notificacion
      $notifications= mysqli_query($conn,"SELECT * FROM notifications WHERE id_notif = $id_notif");
      $values = mysqli_fetch_array($notifications);
      $usuario = $values['ID_registro'];

        #con ayuda de la anterior consulta obtenemos el id del reporte al que le pertenece a ese usuario
      $report = mysqli_query($conn,"SELECT * FROM reports WHERE seller = $usuario");
      $val = mysqli_fetch_array($report);
      $id_report = $val['id_report'];
      
        #cambiamos el estatus de la notificacion para que se muestre como seguiemiento al admin
      $updateestatus = ("UPDATE `reports` SET `estatus` = '3' WHERE `reports`.`id_report` = $id_report");
          # Se cambia el estatus de la tabla reportes(reports)
      $result = mysqli_query($conn,$updateestatus);
    }
?>


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
                      <h2>Para iniciar una peticion de validacion de producto:</h2>
                      <br>
                      <a>1. Actualiza la informacion de tu producto</a>
                      <br>
                      <a>2. Despues de actualizar la informacion del producto da clic en el boton revision. que esta mas abajo</a>
                      <br>
                      <br>
                      <a>*Despues de enviar la solicitud, espera la respuesta de los administradores*</a>
                      <div class="modal-footer">
                        <input type="hidden" value="<?php echo $value['id_notif']?>" name="id_notif">
                        <button type="button" class="btn btn-info" data-bs-dismiss="modal">Cerrar</button>
                        <!-- Boton para por si es un producto o perfil reportado -->
                        <input value="Revision" type="submit" name="update2" class="btn btn-warning">
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
                      <br>
                      <br>
                      <a>*Despues de enviar la solicitud, espera la respuesta de los administradores*</a>
                      <div class="modal-footer">
                        <input type="hidden" value="<?php echo $value['id_notif']?>" name="id_notif">
                        <button type="button" class="btn btn-info" data-bs-dismiss="modal">Cerrar</button>
                        <input value="Revision" type="submit" name="update4" class="btn btn-warning">
                      </div>
<?php
                    }
?>
            </form><!-- Termina el Form -->
        </div>
    </div>
  </div>
</div>