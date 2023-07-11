<?php 
    include('./templates/cabecera.php');
    include('./global/conexion.php');
    # Obtenemos el id del vendedor
    $user = $_GET['seller_data'];
    # Hacemos consulta para obtener los datos que se encuentran en la tabla reg_sellers
    $query = mysqli_query($conn,"SELECT * FROM reg_sellers WHERE ID_registro = $user");
    $data = mysqli_fetch_array($query);
    
?>

    <section class="profile-data">
        
        <div class="profile-seller">
            <div class="overlay-seller"></div>
            <img src="./assets/material/mexican.jpg" alt="Mexican image">
            <div class="profileContent container">
                <div class="profileText">
                    <h1 class="title-profile">Perfil de <strong><?php echo $data['nickname']?></strong></h1>
                </div>
            </div>
        </div>
        <div class="report-seller">
          <a  data-bs-toggle="modal" style="cursor:pointer" data-bs-target="#ModalReportSeller-<?php echo $user?>" class="report-container"><i class='bx bx-error bx-md'></i></a>
             <!-- Modal to Report Seller-->
             <div class="modal fade" id="ModalReportSeller-<?php echo $user?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Reportar Vendedor</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    Informa el motivo de tu reporte.
                    <br><br>
                    <form method="POST" action="./helpers/report-seller.php?id_seller=<?php echo $user?>"> 
                    <textarea class="form-control" id="answer" name="answer" placeholder="Escribe el motivo de tu reporte aquí." style="resize:none" rows="3"></textarea> 
                  </div>
            <div class="modal-footer">
              <!-- =========== -->
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
               <?php 
                  if(@!$_SESSION['user']){ # Si el usuario no esta logeado, se bloquea el boton de reportar?>
                <button type="button" class="btn btn-info" disabled>Enviar reporte</button>
               <?php  }else{ # Si esta logeado...
                  $com = mysqli_query($conn,"SELECT * FROM reports");
                  $set = mysqli_fetch_array($com);
                  $id_comment = $set['id_comment'];
                  $id_userx = $_SESSION['id']; 
                  # Se checa si el usuario ya ha hecho un reporte al mismo comentario
                  $check_report = mysqli_query($conn,"SELECT * FROM reports WHERE seller = '$user' AND ID_registro = '$id_userx'");
                  # Si ya lo hizo, se bloquea el boton de reportar
                  if($check_report->num_rows > 0){?>
                    <button type="button" class="btn btn-info" disabled>Enviar reporte</button>

              <?php  } else{  ?>
                <!-- Si no lo ha hecho se habilita y mandamos el id del comentario y el id del usuario que reporte a otro archivo php -->
                  <input type="submit" name="send-report" class="btn btn-info" value="Enviar reporte">
       
              <?php }  }?> 
<!-- ======== -->
              </form>
            </div>
          </div>
        </div>
      </div>
        <!-- End Modal to Report Seller -->

        </div>
        <!-- Datos que solo vera el vendedor -->
        <?php
        # Hacemos una condicion para saber si es un usuario logeado o no 
            if(!@$_SESSION['user']){}else{ #Si es un usuario:
                    $id_user = $_SESSION['id']; #obtenemos el id en session 
                
                    if($id_user == $user){ # verificamos si el id que esta en session es igual al del vendedor, entonces se habilita el boton de editar info:
                ?>
                <div class="edit-option">
                    <div class="alert alert-dark" role="alert" align="center">
                     Este es tu perfil de vendedor, puedes <a href="edit-profile.php?id_seller=<?php echo $user?>" class="alert-link">EDITAR</a> o <a href="edit-profile.php?id_seller=<?php echo $user?>" class="alert-link">COMPLETAR</a> tu información de perfil en el botón de editar.   
                    </div>
                <div class="btn-edit-profile">
                   <button type="button" class="btn btn-primary" onclick="location.href='edit-profile.php?id_seller=<?php echo $user?>'">Editar perfil</button>
                </div>
                </div>        
             <?php } } ?>    
        
    <!-- Termina datos que solo ve el vendedor -->

    <!-- Datos del vendedor -->
    <div class="inf0-seller">
        <p><strong>Vendedor:</strong>&nbsp;<?php echo $data['nickname']?></p>        
        <p><strong>Número de teléfono:</strong>+<?php echo $data['lada'];?>&nbsp;<?php echo $data['telefono']?></p>        
    </div>

    <?php 
         if(!@$_SESSION['user']){  #Si no hay algun usuario logeado, se le bloquea el boton de Contactar?>
    <div class="chat">
        <p><strong>Contactar:</strong>&nbsp;&nbsp;<button type="button" disabled class="btn btn-info position-relative">
        Abrir chat
        <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
            <span class="visually-hidden">New alerts</span>
        </span>
        </button></p>   
    </div>

    <?php }else{ #Si tiene cuenta, se hace la condicion que si es diferente al del id del vendedor, le muestre el boton de contactar
    if($id_user <> $user){?>
    <!-- Boton de chat  -->
    <div class="chat">
            <p><strong>Contactar:</strong>&nbsp;&nbsp;<button type="button" class="btn btn-info position-relative" onclick="location.href='./toChat.php?seller_data=<?php echo base64_encode($user)?>'" >
               Abrir chat
              <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
              <span class="visually-hidden">New alerts</span>
              </span>
              </button>
            </p>   
        
    </div>
    <?php }else{ # Si es igual las dos ID, entonces es el vendedor el que esta observando el perfil?>
        <div class="chat">
            <p><strong></strong>&nbsp;&nbsp;<button type="button" class="btn btn-info position-relative" onclick="location.href='./chats.php?chat=<?php echo base64_encode($user)?>'">
        Abrir mi lista de chats
        <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
            <span class="visually-hidden">New alerts</span>
        </span>
        </button></p>   
    </div>
   <?php } }
        # Consultar en la tabla que se almacenan algunos datos del vendedor.
        $query2 = mysqli_query($conn,"SELECT * FROM sellers_data WHERE ID_registro = $user");
        $data2 = mysqli_fetch_array($query2);
    
        #Verificamos si el vendedor ya cuenta con los datos de la tabla que usamos.
        #Si los datos del vendedor estan vacios, no hacemos algo, sino mostramos sus datos.
        if(empty($data2['description'])){}else{
    ?>
    <div class="about-seller">
      <h2 align="center">Acerca de vendedor </h2>
       <p class="txt-profile"><?php echo $data2['description']?></p>
    </div>
    <?php } 
        if(empty($data2['location'])){}else{
    ?>
    <div class="ubicacion">
        <h2 align="center">Ubicación</h2>
        <p class="txt-profile"><?php echo $data2['location']?></p>
    </div>    
    <?php }
        if(empty($data2['desc_art'])){}else{
    ?>
    <div class="about-art">
      <h2 align="center">Información de sus artesanías</h2>
      <p class="txt-profile"><?php echo $data2['desc_art']?></p>
    </div>
    <?php } ?>


    <div class="products-seller">
        <h2 align="center">Productos del vendedor</h2>
        <div class='mainContent grid' id="mainContent">
       <?php
        # Consulta para obtener todos los productos del vendedor;
        $query3 = mysqli_query($conn,"SELECT * FROM products WHERE ID_registro = $user ORDER BY rand()");
        while($data3 = mysqli_fetch_array($query3)){
            $id_p = $data3['id_product'];
           
       ?>  
       
       <div class="single-product">
        <a href="product.php?id_product=<?php echo $data3['id_product'];?>" class='referencia'>
             <div class='imgDiv'>
                <img src="assets/products/<?php echo $data3['image1'];?>"  alt="<?php echo $data3['product']?>">
            </div>
            <div class="card-info">
                <span class="product-title"><?php echo $data3['product'];?></span>
                <span class="price">$<?php echo $data3['price'];?></span>
                <p style="color:black">
             <?php 
                # Mismo procedimiento de productos
                 $sql = mysqli_query($conn,"SELECT * FROM stars WHERE id_product = $id_p");
                 $sum =  mysqli_query($conn,"SELECT SUM(star) as score FROM stars WHERE id_product = $id_p");
                 $score = mysqli_fetch_array($sum);
                 $num = $sql->num_rows;
                 if($num > 0){
                     $total = $num * 5;
                     $d1 = $num * 1;$d2 = $num * 2;$d3 = $num * 3;$d4 = $num * 4;$d5 = $num * 5;
                     $counter = $score['score'];
                     if($counter >= $d5): # Si la cantidad total de vots es mayor igual que la 5 parte de la calificacion TOTAL de estrellas, se mostrara una estrella reellena
                     ?>
                     <i class="bx bxs-star bx-5"></i><i class="bx bxs-star bx-5"></i><i class="bx bxs-star bx-5"></i><i class="bx bxs-star bx-5"></i><i class="bx bxs-star bx-5"></i>  
                     <?php elseif($counter >= $d4):?>
                     <i class="bx bxs-star bx-5"></i><i class="bx bxs-star bx-5"></i><i class="bx bxs-star bx-5"></i><i class="bx bxs-star bx-5"></i><i class="bx bxs-star bx-10"></i>
                     <?php elseif($counter >= $d3):?>
                     <i class="bx bxs-star bx-5"></i><i class="bx bxs-star bx-5"></i><i class="bx bxs-star bx-5"></i><i class="bx bxs-star bx-10"></i><i class="bx bxs-star bx-10"></i>
                     <?php elseif($counter >= $d2):?>
                     <i class="bx bxs-star bx-5"></i><i class="bx bxs-star bx-5"></i><i class="bx bxs-star bx-10"></i><i class="bx bxs-star bx-10"></i><i class="bx bxs-star bx-10"></i>  
                     <?php else:?>
                     <i class="bx bxs-star bx-5"></i><i class="bx bxs-star bx-10"></i><i class="bx bxs-star bx-10"></i><i class="bx bxs-star bx-10"></i><i class="bx bxs-star bx-10"></i>
                     <?php endif;
                     ?>
                 (<?php echo $num?>)

             <?php  }else{ ?>
             
             <i class="bx bxs-star bx-10"></i>
             <i class="bx bxs-star bx-10"></i>
             <i class="bx bxs-star bx-10"></i>
             <i class="bx bxs-star bx-10"></i>
             <i class="bx bxs-star bx-10"></i>
             
               (0)
               <?php }?>
             </p>

            </div>
           </a>
        </div>
    <?php }?>
        </div>
    </div><!-- end products-seller -->

    <div class="stars-seller">
        <h2 align="center">Puntuación de vendedor</h2>
        <p align="center" class="vendor-class"><?php echo $data['nickname']?>
        <?php 
                # Mismo procedimiento de productos
                 $sql2 = mysqli_query($conn,"SELECT * FROM profile_comments WHERE seller = $user");
                 $sum2 =  mysqli_query($conn,"SELECT SUM(star) as score2 FROM profile_comments WHERE seller = $user");
                 $score2 = mysqli_fetch_array($sum2);
                 $num2 = $sql2->num_rows;
                 if($num2 > 0){
                     $total2 = $num2 * 5;
                     $d1x = $num2 * 1;$d2x = $num2 * 2;$d3x = $num2 * 3;$d4x = $num2 * 4;$d5x = $num2 * 5;
                     $counter2 = $score2['score2'];
                     if($counter2 >= $d5x): # Si la cantidad total de vots es mayor igual que la 5 parte de la calificacion TOTAL de estrellas, se mostrara una estrella reellena
                     ?>
                     <i class="bx bxs-star bx-6"></i><i class="bx bxs-star bx-6"></i><i class="bx bxs-star bx-6"></i><i class="bx bxs-star bx-6"></i><i class="bx bxs-star bx-6"></i>  
                     <?php elseif($counter2 >= $d4x):?>
                     <i class="bx bxs-star bx-6"></i><i class="bx bxs-star bx-6"></i><i class="bx bxs-star bx-6"></i><i class="bx bxs-star bx-6"></i><i class="bx bxs-star bx-10"></i>
                     <?php elseif($counter2 >= $d3x):?>
                     <i class="bx bxs-star bx-6"></i><i class="bx bxs-star bx-6"></i><i class="bx bxs-star bx-6"></i><i class="bx bxs-star bx-10"></i><i class="bx bxs-star bx-10"></i>
                     <?php elseif($counter2 >= $d2x):?>
                     <i class="bx bxs-star bx-6"></i><i class="bx bxs-star bx-6"></i><i class="bx bxs-star bx-10"></i><i class="bx bxs-star bx-10"></i><i class="bx bxs-star bx-10"></i>  
                     <?php else:?>
                     <i class="bx bxs-star bx-6"></i><i class="bx bxs-star bx-10"></i><i class="bx bxs-star bx-10"></i><i class="bx bxs-star bx-10"></i><i class="bx bxs-star bx-10"></i>
                     <?php endif;
                     ?>
                 (<?php echo $num2?>)

             <?php  }else{ ?>
             
             <i class="bx bxs-star bx-10"></i>
             <i class="bx bxs-star bx-10"></i>
             <i class="bx bxs-star bx-10"></i>
             <i class="bx bxs-star bx-10"></i>
             <i class="bx bxs-star bx-10"></i>
             
               (0)
               <?php }?>
        </p>
    </div>


    <!-- Comentarios para el vendedor -->
                
    <!-- ============== Prueba ====================== -->
    <?php 
    # Consultamos la tabla de comentarios
    $check2 = mysqli_query($conn,"SELECT * FROM profile_comments");
    $dat = mysqli_fetch_array($check2);
    if(!@$_SESSION['user']){

    }else{
    # Si el id que esta en session es igual al del perfil del vendedor, entonces se oculta la barra de comentar
    if($id_user == $dat['seller']){}else{ # Y si no es igual, se muestra la barra de comentar
    ?>
<div class="comments">

    <div class="mb-3 w-auto">
        <label for="exampleFormControlTextarea1" class="form-label">Califica y comenta al vendedor:</label>
        <form action="./helpers/comments.php?id_seller=<?php echo $user?>" method="POST" class="form-stars">
        <p class="clasificacion">
        <input id="radio1" type="radio" name="estrellas" value="5"><!--
        --><label for="radio1">★</label><!--
        --><input id="radio2" type="radio" name="estrellas" value="4"><!--
        --><label for="radio2">★</label><!--
        --><input id="radio3" type="radio" name="estrellas" value="3"><!--
        --><label for="radio3">★</label><!--
        --><input id="radio4" type="radio" name="estrellas" value="2"><!--
        --><label for="radio4">★</label><!--
        --><input id="radio5" type="radio" name="estrellas" value="1"><!--
        --><label for="radio5">★</label>
        </p>
      <textarea class="form-control comment-text" id="exampleFormControlTextarea1" name="comment" rows="3" placeholder="Escribe un comentario." maxlength="100"></textarea>
      <div class="btn-send-com">
      <?php if(@!$_SESSION['user']){ # Si no hay usuario logeado se muestran un mensaje que no puede comentar 
        ?>

      <div class="alert alert-primary" role="alert">
            Inicia sesión para comentar.
      </div>
      
      <?php }else{  # Si esta un usuario logeado, se hace un consulta para ver si ya ha comentado
             $id_user = $_SESSION['id'];
             $consulta = mysqli_query($conn,"SELECT * FROM profile_comments WHERE ID_registro = $id_user AND seller = $user");
             if($consulta->num_rows > 0){ # Si ya voto, entonces su boton de comentar se deshabilitara.
               echo "<input class='btn btn-info' name='send-comment' value='Publicar' disabled>";
               
              }else{   
        ?>
            
                <input type="submit" class="btn btn-info" name="send-comment" value="Publicar">
      <?php } } ?>
    </div>
    </form>
    

  </div>
    </div>      
<?php } }?>
    <div class="all-comments">

        <?php 
            # Consulta para saber si hay comentarios en un perfil de vendedor
            $check = mysqli_query($conn,"SELECT * FROM profile_comments WHERE seller = $user");
            # Si hay comentartios hacer...
            if($check->num_rows > 0){
            # Consulta apra proyectar todos los comentarios
            $cons = mysqli_query($conn,"SELECT * FROM profile_comments INNER JOIN registro ON profile_comments.ID_registro = registro.ID WHERE seller = '$user' ORDER BY rand()");
            
            while($res2 = mysqli_fetch_array($cons)){?>

    <div class="card card-comment">
        <div class="card-body">
          <div class="com-cointer"> 
            
        <p class="stars-score"><strong><?php echo $res2['Nombre']?></strong>&nbsp;&nbsp; 
              <?php
             
              switch($res2['star']){
                case '1': echo "<i class='bx bxs-star bx-5'></i><i class='bx bxs-star bx-10'></i><i class='bx bxs-star bx-10'></i><i class='bx bxs-star bx-10'></i><i class='bx bxs-star bx-10'></i>";
                break;
                case '2': echo "<i class='bx bxs-star bx-5'></i><i class='bx bxs-star bx-5'></i><i class='bx bxs-star bx-10'></i><i class='bx bxs-star bx-10'></i><i class='bx bxs-star bx-10'></i>";
                break;
                case '3': echo "<i class='bx bxs-star bx-5'></i><i class='bx bxs-star bx-5'></i><i class='bx bxs-star bx-5'></i><i class='bx bxs-star bx-10'></i><i class='bx bxs-star bx-10'></i>";
                break;
                case '4': echo "<i class='bx bxs-star bx-5'></i><i class='bx bxs-star bx-5'></i><i class='bx bxs-star bx-5'></i><i class='bx bxs-star bx-5'></i><i class='bx bxs-star bx-10'></i>";
                break;
                case '5': echo "<i class='bx bxs-star bx-5'></i><i class='bx bxs-star bx-5'></i><i class='bx bxs-star bx-5'></i><i class='bx bxs-star bx-5'></i><i class='bx bxs-star bx-5'></i>";
                break;
                default: echo
                  " 
                  <i class='bx bxs-star bx-10'></i>
                  <i class='bx bxs-star bx-10'></i>
                  <i class='bx bxs-star bx-10'></i>
                  <i class='bx bxs-star bx-10'></i>
                  <i class='bx bxs-star bx-10'></i>
                  ";
              }
              ?>
             
        </p>
        </div> 
        <p > <?php echo $res2['comment']?></p>
      </div>
           <!-- Modal -->
           <div class="options-container">
        <a  data-bs-toggle="modal" style="cursor:pointer" data-bs-target="#ModalReport-<?php echo $res2['id_comment']?>" class="report-container"><i class='bx bx-error bx-sm'></i></a>
        
        <!-- Modal to Report Comment-->
        <div class="modal fade" id="ModalReport-<?php echo $res2['id_comment']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Reportar Comentario</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
              Algunas razones comunes por las que los clientes reportan opiniones:
              <ul>
                <li>Anuncios, promociones.</li>
                <li>Insultos, comentarios sin sentido.</li>
                <li>Acoso, blasfemias.</li>
                <li>Lenguaje no apropiado.</li>
            </ul>
              Cuando obtengamos tu reporte, verificaremos si la opinion cumple con las normas de la comunidad.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <?php 
          if(@!$_SESSION['user']){ # Si el usuario no esta logeado, se bloquea el boton de reportar?>
        <button type="button" class="btn btn-info" disabled>Enviar reporte</button>
      <?php  }else{ # Si esta logeado...
         $id_comment = $res2['id_comment'];
         $id_userx = $_SESSION['id']; 
        # Se checa si el usuario ya ha hecho un reporte al mismo comentario
         $check_report = mysqli_query($conn,"SELECT * FROM reports WHERE id_comment = $id_comment AND ID_registro = $id_userx");
        # Si ya lo hizo, se bloquea el boton de reportar
        if($check_report->num_rows > 0){?>
          <button type="button" class="btn btn-info" disabled>Enviar reporte</button>

          <?php  } else{  ?>
            <!-- Si no lo ha hecho se habilita y mandamos el id del comentario y el id del usuario que reporte a otro archivo php -->
            <button type="button" class="btn btn-info" onclick="location.href='./helpers/report-profile-com.php?id_r=<?php echo $res2['id_comment'];?>&seller=<?php echo $user?>'">Enviar reporte</button>
       
      <?php }  }?>
      </div>
    </div>
  </div>
</div>
        <!-- End Modal to Report Comment -->

      </div>
           
           <!-- Modal -->
      </div>

            <?php } #while
                 
            }else{
                ?>
                <div class="alert alert-dark" role="alert">
                  Este vendedor aún no cuenta con comentarios.
                </div>
                <?php 
            }
        ?>
    </div>

</section>
    



<?php 
    include('./templates/pie.php');
?>