<?php 
    include('global/conexion.php');
    include('templates/cabecera.php');
    include('global/querycart.php');
    include('global/cart.php');
    //obtener id del producto
    if(isset($_GET['id_product'])){
        $query = $conn ->query("SELECT * FROM products WHERE id_product = ".$_GET['id_product']) or die($conn->error);

        if(mysqli_num_rows($query) > 0){
            $row = mysqli_fetch_row($query);
        }else{
            echo("<script>location.href = 'index.php';</script>");
        }

    }else{
        echo("<script>location.href = 'index.php';</script>");
    }
?>
  <!-- Card para mostrar los datos del producto detallados. -->
<div class="card mb-3 mx-auto card-product" style="width: 85vw;margin-top:2rem">
  <div class="row g-0">
    <div class="col-md-4">
      <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./assets/products/<?php echo $row[2]?>" class="d-block w-100 object-fit-cover " style="height:70vh" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./assets/products/<?php echo $row[7]?>" class="d-block w-100 object-fit-cover" style="height:70vh" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./assets/products/<?php echo $row[8]?>" class="d-block w-100 object-fit-cover " style="height:70vh" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <?php 
      //Consultar para obtener los datos del vendedor
      $p = $row[9];
      $vendedor = mysqli_query($conn,"SELECT * FROM reg_sellers WHERE ID_registro = $p");
      $resultVendedor = mysqli_fetch_array($vendedor);
?>
    <div class="col-md-8">
      <div class="card-body">
        <h3 class="card-title"><?php echo $row[1]?></h3>
        <p class="card-text price">$<?php echo $row[3];?></p>
        
        <p class="card-text"><small class="text-body-secondary">Vendido por:&nbsp;<strong><a href="profile-seller.php?seller_data=<?php echo $resultVendedor['ID_registro']?>"><?php echo $resultVendedor['nickname']?></a></strong></small></p>
        <p class="card-text"><?php echo $row[4]?></p>
        <p class="card-text stars-pointer">Calificación: 
          <?php 
            //Consulta  para obtener los comentarios que compartan el mismo ID de producto
            $id_product =$row[0];
            $sql = mysqli_query($conn,"SELECT * FROM stars WHERE id_product = $id_product");
            //Sumar todas las estrellas que sean del producto en el que nos encontramos.
            $sum =  mysqli_query($conn,"SELECT SUM(star) as score FROM stars WHERE id_product = $id_product");
            $score = mysqli_fetch_array($sum);
            # Para saber cuantas veces han comentado el producto, num rows cuenta los registros
            $num = $sql->num_rows;
            # Si ha sido mas de una vez se saca el puntaje
            if($num > 0){ 
            $total = $num * 5; # num es el numero total de las veces que se han votado en el producto, a esto le multiplicamos 5 para tener la calificacion perfecta del producto.
            # Si son 10 votos, una calificacion perfecta serian 50 estrellas.  
            
            # Con esto sacamos cuanto es el valor de cada dato y calcular el puntaje que los usuarios han votado.
            $data1 = $num * 1; $data2 = $num * 2;$data3 = $num * 3; $data4 = $num * 4; $data5 = $num * 5;
            $counter = $score['score']; 
            # Counter es la cantidad la suma total de las votaciones.   
            
            if($counter >= $data5): # Si la cantidad total de vots es mayor igual que la 5 parte de la calificacion TOTAL de estrellas, se mostrara una estrella reellena
            ?>
            <i class="bx bxs-star bx-5"></i><i class="bx bxs-star bx-5"></i><i class="bx bxs-star bx-5"></i><i class="bx bxs-star bx-5"></i><i class="bx bxs-star bx-5"></i>  
            <?php elseif($counter >= $data4):?>
            <i class="bx bxs-star bx-5"></i><i class="bx bxs-star bx-5"></i><i class="bx bxs-star bx-5"></i><i class="bx bxs-star bx-5"></i><i class="bx bxs-star bx-10"></i>
            <?php elseif($counter >= $data3):?>
            <i class="bx bxs-star bx-5"></i><i class="bx bxs-star bx-5"></i><i class="bx bxs-star bx-5"></i><i class="bx bxs-star bx-10"></i><i class="bx bxs-star bx-10"></i>
            <?php elseif($counter >= $data2):?>
            <i class="bx bxs-star bx-5"></i><i class="bx bxs-star bx-5"></i><i class="bx bxs-star bx-10"></i><i class="bx bxs-star bx-10"></i><i class="bx bxs-star bx-10"></i>  
            <?php else:?>
            <i class="bx bxs-star bx-5"></i><i class="bx bxs-star bx-10"></i><i class="bx bxs-star bx-10"></i><i class="bx bxs-star bx-10"></i><i class="bx bxs-star bx-10"></i>
            <?php endif;
            ?>
        (<?php echo $num?>)
        
<?php
            }else{ # SI no se ha votado alguna vez se muestran las estrallas vacias con puntaje de 0?>
            
          <i class="bx bxs-star bx-10"></i>
          <i class="bx bxs-star bx-10"></i>
          <i class="bx bxs-star bx-10"></i>
          <i class="bx bxs-star bx-10"></i>
          <i class="bx bxs-star bx-10"></i>
          
            (0)
            <?php }?>

          
          
        
        </p>

      
        <form action="" method="post">

        <input type="hidden" name="image" value="<?php echo openssl_encrypt($row[2],COD,KEY);?>"/>
                    <input type="hidden" name="idproduct" value="<?php echo openssl_encrypt($row[0],COD,KEY);?>">
                    <input type="hidden" name="product" value="<?php echo openssl_encrypt($row[1],COD,KEY);?>">
                    <input type="hidden" name="precio" value="<?php echo openssl_encrypt($row[3],COD,KEY);?>">
                    <input type="hidden" name="cantidad" value="<?php echo openssl_encrypt(1,COD,KEY);?>">
        <div class="choose">
          <button type="submit" class="btn btn-info" name="button-cart" value="Agregar" >Comprar <i class="bx bxs-cart"></i></button>
        <!-- <button type="button" class="btn btn-success" onclick="location.href=''">Comprar ahora</button> -->
       
        </div>
            </form>
    </div>
    
    <a  data-bs-toggle="modal" data-bs-target="#ModalProductReport-<?php echo $row[0]?>" style="display:flex;justify-content: end; padding :1rem;cursor:pointer;" class="report-container"><i class='bx bx-error bx-md'></i></a>
  <div class="modal fade" id="ModalProductReport-<?php echo $row[0]?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Reportar Productos</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        Informa el motivo de tu reporte para este producto.
        <br><br>
        <form method="POST" action="./helpers/report-product.php?id_p=<?php echo $row[0]?>"> 
        <textarea class="form-control" id="answer" name="answer" placeholder="Escribe el motivo de tu reporte aquí." style="resize:none" rows="3"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <?php 
          if(@!$_SESSION['user']){ # Si no es usuario logeado, se deshabilita el boton de reportar
        ?>
        <input type="submit" disabled name="send-report" class="btn btn-info" value="Reportar">
        <?php }else{ 
           $id_u = $_SESSION['id'];
           $prod = $row[0]; 
           $check_p_report = mysqli_query($conn,"SELECT * FROM reports WHERE ID_registro = $id_u AND id_product = $prod");
          # Checamos si en la tabla de reportes ya hay algun reporte del usuario que esta en session
          # Si ya hay uno entonces se deshabilita el boton.
          if($check_p_report->num_rows > 0){?>
          <input type="submit" disabled name="send-report" class="btn btn-info" value="Reportar">
          <?php }else{?>
            <input type="submit" name="send-report" class="btn btn-info" value="Reportar">
          <?php }}?>

      </div>
    
  </form>
  </div>
      </div>
    </div>
  </div>
  </div>
</div>
<div class="comments">

    <div class="mb-3 w-auto">
      <label for="exampleFormControlTextarea1" class="form-label">Califica y comenta este producto:</label>
          <!-- Stars -->
      <form action="./helpers/stars.php?id_p=<?php echo $row[0]?>" method="POST" class="form-stars">
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
            
            <!-- <input type="submit" class="btn btn-info" name="send-comment"value="Publicar" disabled>
           -->
            <div class="alert alert-primary" role="alert">
                 Inicia sesión para comentar.
            </div>
          
            <?php }else{  # Si esta un usuario logeado, se hace un consulta para ver si ya ha comentado
                 $id_user = $_SESSION['id'];
                 $query3 = mysqli_query($conn,"SELECT * FROM stars WHERE ID_registro = $id_user AND id_product = $id_product");
                 if($query3->num_rows > 0){ # Si ya voto, entonces su boton de comentar se deshabilitara.
                   echo "<input class='btn btn-info' name='send-comment' value='Publicar' disabled>";
                   
                  }else{   
            ?>
                
                    <input type="submit" class="btn btn-info" name="send-comment" value="Publicar">
          <?php } } ?>
        </div>
        </form>
        <!-- Stars -->

      </div>
        </div>

        <div class="all-comments">
      <?php 
        # Consulta para saber si hay comentarios en un producto
        $check = mysqli_query($conn,"SELECT * FROM registro INNER JOIN stars 
        ON registro.ID = stars.ID_registro INNER JOIN products 
        ON stars.id_product = products.id_product 
        WHERE stars.id_product = $id_product");
          
        
      # Si hay comentarios hacer...
        if($check->num_rows > 0){ 
          
          # Consultas de $query2 es dependiendo si el usuario esta logeado o no
          if(@!$_SESSION['user']){
            # Consulta query2 si no esta logeado, esto para mostrar todos los comentarios del producto
            $query2 = mysqli_query($conn,"SELECT * FROM registro INNER JOIN stars 
            ON registro.ID = stars.ID_registro INNER JOIN products 
            ON stars.id_product = products.id_product 
            WHERE stars.id_product = $id_product");  
          
          }else{
            /*  
            Consulta query2 para que solo se muestren todos los comentarios, pero que no se muestre 
            el de el usuario logeado y el comentario se muestre al inicio ($query4)
            */ 
          
            $query2 = mysqli_query($conn,"SELECT * FROM registro INNER JOIN stars 
            ON registro.ID = stars.ID_registro INNER JOIN products 
            ON stars.id_product = products.id_product 
            WHERE stars.id_product = $id_product AND stars.ID_registro <> $id_user");
            # Para identificar el comentario del usuario logeado
            $query4 = mysqli_query($conn,"SELECT * FROM registro INNER JOIN stars 
            ON registro.ID = stars.ID_registro INNER JOIN products 
            ON stars.id_product = products.id_product 
            WHERE stars.id_product = $id_product AND stars.ID_registro = $id_user ");
            # Si el usuario logeado hizo un comentario en el producto
             if($query4->num_rows > 0){
            /* ============= */

              # Recopilamos y mostramos por separado el comentario del usuario logeado
              $data2 = mysqli_fetch_array($query4);
              ?>
                
              <div class="card card-comment border-primary mb-3">
                 <div class="card-body">
                   <div class="com-cointer"> 
                     <div class="space-bt"> 
                    <style>.space-bt{display:flex; justify-content:space-between;}</style>
              <div class="st-cont">  
                 <p class="stars-score"><strong><?php echo $data2['Nombre']?></strong>&nbsp;&nbsp; 
              <?php
             
              switch($data2['star']){
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
            <div class="icons-com">
            <!--  Boton para eliminar comentario del usuario propietario -->
            <i class='bx bxs-x-circle bx-sm del-icon-c' data-bs-toggle="modal" data-bs-target="#delComModal"></i>

            </div>
            </div>
            </div> 
        <p> <?php echo $data2['comment']?></p>
        </div>
      </div>
        
              
         
         <?php        
             }//ifquery4
            }
        # Mostramos todos los demas comentarios con su respectiva calificacion.
            /* ======== */
        while($data = mysqli_fetch_array($query2)){
          
      ?>
      <div class="card card-comment">
        <div class="card-body">
          <div class="com-cointer"> 
            
        <p class="stars-score"><strong><?php echo $data['Nombre']?></strong>&nbsp;&nbsp; 

              <?php
              
              switch($data['star']){
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
          
          
          
        <p > <?php echo $data['comment']?></p>
        <!-- style="white-space:nowrap; text-overflow:ellipsis;overflow:hidden" -->
      </div>
      <div class="options-container">
        <a  data-bs-toggle="modal" style="cursor:pointer" data-bs-target="#ModalReport-<?php echo $data['id_star']?>" class="report-container"><i class='bx bx-error bx-sm'></i></a>
        
        <!-- Modal to Report Comment-->
        <div class="modal fade" id="ModalReport-<?php echo $data['id_star']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <?php $id_p=$_GET['id_product'];
          if(@!$_SESSION['user']){ # Si el usuario no esta logeado, se bloquea el boton de reportar?>
        <button type="button" class="btn btn-info" disabled>Enviar reporte</button>
      <?php  }else{ # Si esta logeado...
         $id_star = $data['id_star'];
         $id_userx = $_SESSION['id']; 
        # Se checa si el usuario ya ha hecho un reporte al mismo comentario
         $check_report = mysqli_query($conn,"SELECT * FROM reports WHERE id_star = $id_star AND ID_registro = $id_userx");
        # Si ya lo hizo, se bloquea el boton de reportar
        if($check_report->num_rows > 0){?>
          <button type="button" class="btn btn-info" disabled>Enviar reporte</button>

          <?php  } else{  ?>
            <!-- Si no lo ha hecho se habilita y mandamos el id del comentario y el id del usuario que reporte a otro archivo php -->
            <button type="button" class="btn btn-info" onclick="location.href='./helpers/report-comment.php?id_r=<?php echo $data['id_star'];?>&id_product=<?php echo $id_p?>'">Enviar reporte</button>
       
      <?php }  }?>
      </div>
    </div>
  </div>
</div>
        <!-- End Modal to Report Comment -->

      </div>
      
      </div>
    <?php }
        }else{
          ?>
          <div class="alert alert-dark" role="alert">
            Este producto aún no cuenta con comentarios.
          </div>
          <?php 
        }
    ?>
</div>
  
 
<!-- Modals -->


<!-- Modal Delete -->
<div class="modal fade" id="delComModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Comentario</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mb-3">
       
      ¿Estás seguro de que deseas eliminar tu comentario?
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-danger" onclick="location.href='./helpers/delete-comment.php?id_com=<?php echo $data2['id_star'];?>'">Eliminar</button>
      </div>
    </div>
  </div>
</div>


<?php 
    include('templates/pie.php');
?>